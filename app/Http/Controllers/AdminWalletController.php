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
Use App\Models\beta_do; 
Use App\Models\order_inout;  
Use App\Models\wallet_transaction;  


class AdminWalletController extends Controller
{
    public function wallet_processing($id,$token)
    { 
        $select = order_inout::where('id',$id)->where('token', $token)->where('status','Waiting')->first();
        if($select)
        {
            return view('back.wallet.process',compact('select'));
        }
        else
        {
            return redirect()->back();
        } 
    }

    public function wallet_process_start(Request $request)
    {
        $select = order_inout::where('id',$request->id)->where('token', $request->token)->where('status','Waiting')->first();
        $beta_do = new beta_do;  
        
        if($request->purpose=='SUCCESS')
        {

            $wallet_transaction = new wallet_transaction;
            $wallet_transaction->user_id = $select->user_id;
            $wallet_transaction->status = $request->purpose;

            if ($select->type == 'in') {
                $wallet_transaction->amount = '+' . $select->total;
                $wallet_transaction->type = "Deposit";
                
                $beta_do->what = "ຕົກລົງເພີ່ມເງິນໃຫ້ User " . $select->HaveUser->username . " User ID ". $select->user_id . " ຈຳນວນ " . number_format($select->total) ." ກິບ Order ". $select->id;
                $beta_do->code = 'Wallet_in_Success';
            } elseif ($select->type == 'out') {
                $wallet_transaction->amount = '-' . $select->total;
                $wallet_transaction->type = "Withdrawal";
                
                $beta_do->what = "ຕົກລົງຖຸອນເງິນໃຫ້ User " . $select->HaveUser->username . " User ID ". $select->user_id . " ຈຳນວນ " . number_format($select->total) ." ກິບ Order ". $select->id;
                $beta_do->code = 'Wallet_out_Success';
            } else {
                // Handle other cases if needed
            }

            $wallet_transaction->created_at = Carbon::now('Asia/Bangkok');
            $wallet_transaction->admin = session("admin_id");
            $wallet_transaction->save();

            $select->status = "Success";
            
            $select->tran_id = $wallet_transaction->id;

        }
        elseif($request->purpose=='CANCEL')
        {
            $beta_do->what = "ຍົກເລີກເພີ່ມເງິນໃຫ້ User " . $select->HaveUser->username . " User ID ". $select->user_id . " ຈຳນວນ " . number_format($select->total) ." ກິບ";
            $beta_do->code = 'Wallet_Cancelled';
            $select->status = "Cancel"; 
            $select->cancel_reason = $request->reason; 
        }
        else
        {

        }

        $select->save();


        $beta_do->admin_id = session("admin_id");
        $beta_do->date = Carbon::now('Asia/Bangkok');
        $beta_do->save();

        return response()->json(['success' => true]);  

    }


    public function wallet_thing($thing)
    {
       $select = order_inout::WHERE('status','Waiting')->WHERE('type',$thing)->orderby('id','DESC')->paginate(50, ['*'], 'page_name') ;
       return view('back.wallet.index',compact("select"))->with('thing',$thing);
    }


    public function wallet_thing_list($thing)
    {
       $select = order_inout::WHERE('type',$thing)->orderby('id','DESC')->paginate(50, ['*'], 'page_name') ;
       return view('back.wallet.index',compact("select"))->with('thing',$thing);
    }
    
}
