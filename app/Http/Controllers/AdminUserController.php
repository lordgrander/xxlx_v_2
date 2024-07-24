<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

use session;
 
 

use Illuminate\Support\Str; Use Hash; 
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Carbon\carbon;
use Carbon\CarbonTimeZone;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

Use App\Models\Users;  
Use App\Models\wallet_transaction;  
Use App\Models\order_inout;  
Use App\Models\beta_do;  
Use App\Models\buy_order;  
Use App\Models\buy;  
 

class AdminUserController extends Controller
{
   public function index()
   { 
        $users = Users::select('users.*')
        ->selectRaw('SUM(CASE 
            WHEN wallet_transaction.type IN ("Deposit", "Win", "Withdrawal", "Purchase") 
            THEN wallet_transaction.amount 
            ELSE 0 
        END) AS current_money')
        ->join('wallet_transaction', 'users.id', '=', 'wallet_transaction.user_id')
        ->where('wallet_transaction.status', 'SUCCESS')
        ->groupBy('users.name')
        ->paginate(50, ['*'], 'page_name');
        return view('back.user.index',compact('users'));
   }



   public function money($token)
   {
        $user = Users::where('encode',$token)->first();
        if($user)
        { 
            $check_money = DB::select("SELECT 
                    c.username AS customer_name, 
                    SUM( CASE WHEN t.type = 'Deposit'
                        THEN t.amount WHEN t.type = 'Win' 
                        THEN t.amount WHEN t.type = 'Withdrawal' 
                        THEN t.amount WHEN t.type = 'Purchase' 
                        THEN t.amount ELSE 0 END 
                    ) AS current_money 
                    FROM users c 
                    JOIN wallet_transaction t 
                    ON c.id = t.user_id 
                    WHERE c.id IN ('". $user->id ."') AND t.status = 'SUCCESS'  GROUP BY c.name;            
            ");  
           
            return view('back.user.money',compact('user'))->with('token',$token)->with('check_money',$check_money);
        }
        else
        {

        }
   }

   

   public function money_process(Request $request)
   {
        $user = Users::where('encode',$request->token)->first();
        
        $money = str_replace(',','',$request->money);
        $beta_do = new beta_do;  
        $order_inout   = new order_inout;

            $wallet_transaction = new wallet_transaction;
            $wallet_transaction->user_id = $user->id;
            $wallet_transaction->status = 'SUCCESS';
            
            if ($request->action == 'Deposit') {
               
                $order_inout->type =        'in';

                $wallet_transaction->amount = '+' . $money;
                $wallet_transaction->type = "Deposit";
                
                $beta_do->what = "ເພີ່ມເງິນໂດຍກົງໃຫ້ User " . $user->username . " User ID ". $user->id . " ຈຳນວນ " . number_format($money) ." ກິບ";
                $beta_do->code = 'Wallet_in_Success';
            } elseif ($request->action == 'Withdrawal') {
                
                $check_money = DB::select("SELECT 
                        c.name AS customer_name, 
                        SUM( CASE WHEN t.type = 'Deposit'
                            THEN t.amount WHEN t.type = 'Win' 
                            THEN t.amount WHEN t.type = 'Withdrawal' 
                            THEN t.amount WHEN t.type = 'Purchase' 
                            THEN t.amount ELSE 0 END 
                        ) AS current_money 
                        FROM users c 
                        JOIN wallet_transaction t 
                        ON c.id = t.user_id 
                        WHERE c.id IN ('". $user->id ."') AND t.status = 'SUCCESS'  GROUP BY c.name;            
                ");   
                if($check_money[0]->current_money<$money) 
                {

                    return response()->json(['success' => false , 'message' => 'ເງິນບໍ່ພໍທີ່ຈະຖອນອອກ']);  
                }
                else
                {
                    $wallet_transaction->amount = '-' . $money;
                    $wallet_transaction->type = "Withdrawal";
                    
                    $beta_do->what = "ຖຸອນເງິນໂດຍກົງໃຫ້ User " . $user->username . " User ID ". $user->id . " ຈຳນວນ " . number_format($money) ." ກິບ";
                    $beta_do->code = 'Wallet_out_Success';
                } 
                
                $order_inout->type =        'out';
                
            } else {
                // Handle other cases if needed
            }

            $wallet_transaction->created_at = Carbon::now('Asia/Bangkok');
            $wallet_transaction->admin = session("admin_id");
            $wallet_transaction->save();
 
            $order_inout->date      = Carbon::now('Asia/Bangkok');
            $order_inout->status   = "Success";
            $order_inout->img      = NULL;
            $order_inout->total  = $money; 
            $order_inout->user_id  = $user->id; 
            $order_inout->tran_id  = $wallet_transaction->id; 
            $order_inout->save();


            $beta_do->admin_id = session("admin_id");
            $beta_do->date = Carbon::now('Asia/Bangkok');
            $beta_do->save();

        return response()->json(['success' => true]);  
   }
   
   public function edit($token)
   {
    $user = Users::where('encode',$token)->first(); 
    return view('back.user.edit',compact('user'));
   }

   public function update(Request $request, $token)
   {
       $user = Users::where('encode', $token)->first();
   
       if ($user) {
           // Check if the username has changed
           if ($user->name !== $request->name) {
               // Check if the new username is already used by another user
               $duplicate_check = Users::where('name', $request->name)->first();
               if ($duplicate_check) {
                   return response()->json(['success' => false, 'context' => 'duplicate_username']);
               }
           }
   
           // Update user details
           $user->username = $request->username;
           $user->name = $request->name;
           $user->phone = $request->phone;
           $user->status = $request->status; 
           if ($request->check == 'yes') {
               $user->password = Hash::make($request->password);
           }
           $user->save();
   
           // Log the admin action
           $beta_do = new beta_do;
           $beta_do->what = session("admin_name") . " edited customer " . $request->username;
           $beta_do->code = 'user_edit';
           $beta_do->admin_id = session("admin_id");
           $beta_do->date = Carbon::now('Asia/Bangkok');
           $beta_do->save();
   
           return response()->json(['success' => true, 'context' => 'success']);
       } else {
           return response()->json(['success' => false, 'context' => 'user_not_found']);
       }
   
       return view('back.user.edit', compact('user'));
   }
   

   public function create()
   { 
        return view('back.user.create');
   } 
    
   public function create_process(Request $request)
   {
       // Validate the incoming data
       $request->validate([
           'username' => 'required|alpha_num', 
           'password' => 'required|min:8|same:confirm-password',
       ]);

       // Create a new customer
       // dd($request->input('name'));
       $check = Users::where("name",$request->input('name'))->first();
       if($check)
       {
           return response()->json(['message' => 'Registration Failed',"status"=>"Duplicate"], 200); 
       }
       else
       {
           $customer = new Users;
           $customer->username = $request->input('username');
           $customer->name = $request->input('name');
           $customer->password = Hash::make($request->input('password'));
           $customer->phone = $request->input('phone');
           $customer->encode =  date('Ymd').Str::random(20);
           $customer->status =  'ACTIVE';
           $customer->created_at = Carbon::now('Asia/Bangkok');

           $customer->save();  
         
            $wallet_transaction = new wallet_transaction;
            $wallet_transaction->user_id = $customer->id;
            $wallet_transaction->status = "SUCCESS";
            $wallet_transaction->amount = '0';
            $wallet_transaction->type = "Deposit"; 
            $wallet_transaction->sort = "0";
            $wallet_transaction->created_at = Carbon::now('Asia/Bangkok');
            $wallet_transaction->save();
    
           $beta_do = new beta_do;  
           $beta_do->what = session("admin_name") . " ສ້າງລູກຄ້າ  ";
           $beta_do->code = 'user_create'; 
           $beta_do->admin_id = session("admin_id");
           $beta_do->date = Carbon::now('Asia/Bangkok');
           $beta_do->save();
     
           return response()->json(['message' => 'Registration successful',"status"=>"SUCCESS"], 200);
       } 
   }


   public function purches($token)
   { 
    $user = Users::where('encode', $token)->first();
    $buy_order = buy_order::where('user_id', $user->id)->orderby('id','DESC')->paginate(50, ['*'], 'page_name') ;

    return view('back.user.order',compact('buy_order'))->with('user_name',$user->username);
   }

   public function statement($token)
   { 
    $user = Users::where('encode', $token)->first();
    $wallet_transaction = wallet_transaction::where('user_id', $user->id)->where('status','success')->orderby('id','DESC')->paginate(50, ['*'], 'page_name') ;


    $check_money = DB::select("SELECT 
        c.username AS customer_name, 
        SUM( CASE WHEN t.type = 'Deposit'
            THEN t.amount WHEN t.type = 'Win' 
            THEN t.amount WHEN t.type = 'Withdrawal' 
            THEN t.amount WHEN t.type = 'Purchase' 
            THEN t.amount ELSE 0 END 
        ) AS current_money 
        FROM users c 
        JOIN wallet_transaction t 
        ON c.id = t.user_id 
        WHERE c.id IN ('". $user->id ."') AND t.status = 'SUCCESS'  GROUP BY c.name;            
    ");   
    return view('back.user.statement',compact('wallet_transaction'))->with('user_name',$user->username)->with('check_money',$check_money[0]->current_money);
   }

   public function inout($token)
   { 
    $user = Users::where('encode', $token)->first();
    $order_inout = order_inout::WHERE('user_id', $user->id)->orderby('id','DESC')->paginate(50, ['*'], 'page_name') ;
          
    return view('back.user.inout',compact('order_inout'))->with('user_name',$user->username);
   }
   
   public function win($token)
   { 
    $user = Users::where('encode', $token)->first();  
    $select = buy::where('user_id',$user->id)->where('define','Win')->orderby('id','DESC')->paginate(50, ['*'], 'page_name') ;
         
    return view('back.user.win',compact('select'))->with('user_name',$user->username);
   }
}
