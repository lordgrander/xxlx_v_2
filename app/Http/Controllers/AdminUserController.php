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
}
