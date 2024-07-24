<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
 

use Illuminate\Support\Str; Use Hash; 
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Carbon\carbon;
use Carbon\CarbonTimeZone;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

Use App\Models\wallet_transaction;
Use App\Models\order_inout; 
Use App\Models\Users; 
Use App\Models\banks; 
 

class WalletController extends Controller
{
    public function index()
    {
        $bank = banks::get();

        $money = 0;
            // $user_id = session('user_id');
            $user_id = session('user_id');
            $money = DB::select("SELECT 
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
                    WHERE c.id IN ('". $user_id ."') AND t.status = 'SUCCESS'  GROUP BY c.name;            
            ");   
           
            if($money)
            {
                $ccc = DB::select("SELECT SUM(total) AS total FROM order_inout WHERE user_id = '".session('user_id')."' AND status = 'Waiting' AND type = 'out'");
        
                if ($ccc[0]->total != null)  
                {
                    $money = $money[0]->current_money - $ccc[0]->total; 
                }
                else
                { 
                    $money = $money[0]->current_money; 
                }
            }
            else
            {
                $money=0;
            } 

            $order_inout = order_inout::where("user_id", session('user_id'))->where('type','in')->orderby('id','DESC')->paginate(10, ['*'], 'page_name');;
         
        return view("front.wallet.index",compact('bank','order_inout'))->with('money',$money);
    }

    public function in_process(Request $request)
    {
        $d = date("Y_m_d");
        $t = date("H_i_s");
        $filename = $d . '-' . session('user_id') . '-' . $t . '.png';

        $dum_path = 'cj/kkol' . session('user_id') .'/'.$d.'/'.session('user_id'); 
        $path = public_path($dum_path);  
         
        if (!File::isDirectory($path)) {
            // If it doesn't exist or is not a directory, create it
            File::makeDirectory($path, 0755, true);
        }
        
        $pdfFile = $request->file('image');
        
        if (File::isReadable($pdfFile)) {
            if (File::size($pdfFile) < 13057152) {  

                $filename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $filename = Str::slug($filename);
                
                $path_name =$pdfFile->store($dum_path, ['disk' =>   'my_files']);  
                
                $currentTime = Carbon::now('Asia/Bangkok');
                $formattedTime = $currentTime->format('H:i:s'); // Use H:i:s format for 24-hour clock
                $bank_transfer_id = $request->bank;
                $money = str_replace(',','',$request->money);

                $order_inout              = new order_inout;
                $order_inout->type =        'in';
                $order_inout->date      = Carbon::now('Asia/Bangkok');
                $order_inout->status        = "Waiting";
                $order_inout->img      = $path_name;
                $order_inout->total  = $money;
                $order_inout->user_id  = session('user_id');
                $order_inout->bank_transfer_id  = $bank_transfer_id;
                $order_inout->token = Str::random(64);
                $order_inout->save();
                return response()->json(['status' => '200', 'message' => 'Image uploaded successfully']);
            }
            else
            {
                return response()->json(['status' => '406', 'message' => 'File ໃຫຍ່ເກີນໄປກະລູນາ Crop ລົງ']);
            }
        }
        else
        {
            return response()->json(['status' => '405', 'message' => 'Wrong Upload File']);
        }
    }
    
    public function out()
    {
        $bank = banks::get();

        $money = 0;
            // $user_id = session('user_id');
            $user_id = session('user_id');
            $money = DB::select("SELECT 
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
                    WHERE c.id IN ('". $user_id ."') AND t.status = 'SUCCESS'  GROUP BY c.name;            
            ");   
           
            if($money)
            {
                $ccc = DB::select("SELECT SUM(total) AS total FROM order_inout WHERE user_id = '".session('user_id')."' AND status = 'Waiting' AND type = 'out'");
        
                if ($ccc[0]->total != null)  
                {
                    $money = $money[0]->current_money - $ccc[0]->total; 
                }
                else
                { 
                    $money = $money[0]->current_money; 
                }
            }
            else
            {
                $money=0;
            } 

            $order_inout = order_inout::where("user_id", session('user_id'))->where('type','out')->orderby('id','DESC')->paginate(10, ['*'], 'page_name');;
         
        return view("front.wallet.out",compact('bank','order_inout'))->with('money',$money);
    }

    

    public function out_process(Request $request)
    {
        $d = date("Y_m_d");
        $t = date("H_i_s");
        $filename = $d . '-' . session('user_id') . '-' . $t . '.png';

        $dum_path = 'cj/kkol' . session('user_id') .'/'.$d.'/'.session('user_id'); 
        $path = public_path($dum_path);  
         
        if (!File::isDirectory($path)) {
            // If it doesn't exist or is not a directory, create it
            File::makeDirectory($path, 0755, true);
        }
        
        $pdfFile = $request->file('image');
        
        if (File::isReadable($pdfFile)) {
            if (File::size($pdfFile) < 13057152) {  

                $filename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $filename = Str::slug($filename);
                
                $path_name =$pdfFile->store($dum_path, ['disk' =>   'my_files']);  
                
                $currentTime = Carbon::now('Asia/Bangkok');
                $formattedTime = $currentTime->format('H:i:s'); // Use H:i:s format for 24-hour clock
                $bank_transfer_id = $request->bank;
                $money = str_replace(',','',$request->money);
                $bank_number = $request->bank_number;

                $order_inout              = new order_inout;
                $order_inout->type =        'out';
                $order_inout->date      = Carbon::now('Asia/Bangkok');
                $order_inout->status        = "Waiting";
                $order_inout->img      = $path_name;
                $order_inout->total  = $money;
                $order_inout->bank_number  = $bank_number;
                $order_inout->user_id  = session('user_id');
                $order_inout->bank_transfer_id  = $bank_transfer_id; 
                $order_inout->token = Str::random(64);
                $order_inout->save();
                return response()->json(['status' => '200', 'message' => 'Image uploaded successfully']);
            }
            else
            {
                return response()->json(['status' => '406', 'message' => 'File ໃຫຍ່ເກີນໄປກະລູນາ Crop ລົງ']);
            }
        }
        else
        {
            $currentTime = Carbon::now('Asia/Bangkok');
                $formattedTime = $currentTime->format('H:i:s'); // Use H:i:s format for 24-hour clock
                $bank_transfer_id = $request->bank;
                $money = str_replace(',','',$request->money);
                $bank_number = $request->bank_number;

                $order_inout              = new order_inout;
                $order_inout->type =        'out';
                $order_inout->date      = Carbon::now('Asia/Bangkok');
                $order_inout->status        = "Waiting";
                $order_inout->total  = $money;
                $order_inout->bank_number  = $bank_number;
                $order_inout->user_id  = session('user_id');
                $order_inout->bank_transfer_id  = $bank_transfer_id; 
                $order_inout->token = Str::random(64);
                $order_inout->save();
                return response()->json(['status' => '200', 'message' => 'uploaded successfully']); 
        }
    }
}
