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

Use App\Models\buy;
Use App\Models\buy_order;
Use App\Models\wallet_transaction;
Use App\Models\Users;
Use App\Models\box;

class BuyController extends Controller
{
    public function index($index)
    {
        // if(session('user_id'))
        // {  
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
            $gain_number = 0;
            $head_menu = '';

            if($index=='W')
            { 
                $gain_number = 1;
                $head_menu = 'ເລກວິ້ງ';
            }
            elseif($index=='T')
            {
                $gain_number = 2;
                $head_menu = 'ເລກສອງໂຕ'; 
            }
            elseif($index=='TH')
            {
                $gain_number = 3;
                $head_menu = 'ເລກສາມໂຕ'; 
            }
            elseif($index=='F')
            {
                $gain_number = 4;
                $head_menu = 'ເລກສີ່ໂຕ'; 
            }
            elseif($index=='FV')
            {
                $gain_number = 5;
                $head_menu = 'ເລກຫ້າໂຕ'; 
            }
            else
            {

                $gain_number = 0;
                $head_menu = '';
            }

            return view('front.buy.index')->with('money',$money)->with('gain_number',$gain_number)
            ->with('head_menu',$head_menu);
        // }
        // else
        // {
            
        //     return view('front.buy.index')->with('money',0.00); 
        // } 
    }

    public function buy(Request $request,$gain_number)
    {
       

        $custom_data = $request->custom_data;
        $pick_type = $request->pick_type;
        $data = $request->data;
        $name = '';
        $percent= '';
        if($gain_number=='1')
        {
            $name = 'WING';
            $percent = "20";
        }
        elseif($gain_number=='2')
        {
            $name = 'TWO';
            $percent = "20"; 
        }
        elseif($gain_number=='3')
        {
            $name = 'THREE';
            $percent = "20";  
        }
        elseif($gain_number=='4')
        {
            $name = 'FOUR';
            $percent = "20";   
        }
        elseif($gain_number=='5')
        {
            $name = 'FIVE';
            $percent = "20";    
        }
        elseif($gain_number=='69')
        {
            $name = 'HIGHTLOW';
            $percent = "20";    
        }
        elseif($gain_number=='12')
        {
            $name = 'KICKCOOL';
            $percent = "20";    
        }
        else
        {

        }
      
        $box_id = box::where('status','BUYING')->first();
        if($box_id)
        {

        }
        else
        { 
            return response()->json(['status' => 'CLOSED']);
        }
        $user_id = session('user_id');

        if($pick_type=='UPDOWN')
        {
            $buy_order = new buy_order;
            $buy_order->user_id = $user_id;
            $buy_order->name = $name;
            $buy_order->type = "UP";
            $buy_order->percent = $percent;
            $buy_order->total_price = '0';
            $buy_order->box_id = $box_id->id;
            $buy_order->created_at = Carbon::now('Asia/Bangkok');
            $buy_order->save();

            $buy_orderxo = new buy_order;
            $buy_orderxo->user_id = $user_id;
            $buy_orderxo->name = $name;
            $buy_orderxo->type = "DOWN";
            $buy_orderxo->percent = $percent;
            $buy_orderxo->total_price = '0';
            $buy_orderxo->box_id = $box_id->id;
            $buy_orderxo->created_at = Carbon::now('Asia/Bangkok');
            $buy_orderxo->save();
    
            // 0 => array:2 [
            //     "number" => "1"
            //     "price" => null
            //   ]
            $total = 0;
            $totalxo = 0;
            foreach($data as $r)
            {
                $price = str_replace(',','',$r['price']); 
                // dd($r['number'],$r['price']);
                $number = $r['number'];
                if($r['number']=="ແທງສູງ")
                {
                    $number = "HIGHT";
                }
                elseif($r['number']=="ແທງຕ່ຳ")
                {
                    $number = "LOW"; 
                }
                elseif($r['number']=="ແທງຄີກ")
                {
                    $number = "KICK"; 
                }
                elseif($r['number']=="ແທງຄູ່")
                {
                    $number = "COOL"; 
                }
                else
                {
    
                }

                $buy = new buy;
                $buy->name = $name; 
                $buy->buy_order = $buy_order->id;
                $buy->user_id = $user_id;
                $buy->number = $number;
                $buy->price = $price;
                // $buy->price = '1000';
                $buy->type = "UP";
                $buy->box_id =  $box_id->id;
                $buy->created_at = Carbon::now('Asia/Bangkok');
                $buy->save();
                // $total += $r['price'];
                $total += $price;

                $buyxo = new buy;
                $buyxo->buy_order = $buy_orderxo->id;
                $buyxo->user_id = $user_id;
                $buyxo->number = $number;
                $buyxo->price = $price;
                // $buyxo->price = '1000';
                $buyxo->type = "DOWN";
                $buyxo->box_id =  $box_id->id;
                $buyxo->created_at = Carbon::now('Asia/Bangkok');
                $buyxo->save();
                // $total += $r['price'];
                $totalxo += $price;
            }
    
    
    
    
            $buy_order->total_price = $total;
            $buy_order->save();
    
            $buy_orderxo->total_price = $totalxo;
            $buy_orderxo->save();
    
            $wallet_transaction = new wallet_transaction;
            $wallet_transaction->user_id = $user_id;
            $wallet_transaction->status = "SUCCESS";
            $wallet_transaction->amount = '-' . $total;
            $wallet_transaction->type = "Purchase"; 
            $wallet_transaction->sort = $buy_order->id;
            $wallet_transaction->created_at = Carbon::now('Asia/Bangkok');
            $wallet_transaction->save();
    
            $wallet_transaction = new wallet_transaction;
            $wallet_transaction->user_id = $user_id;
            $wallet_transaction->status = "SUCCESS";
            $wallet_transaction->amount = '-' . $totalxo;
            $wallet_transaction->type = "Purchase"; 
            $wallet_transaction->sort = $buy_orderxo->id;
            $wallet_transaction->created_at = Carbon::now('Asia/Bangkok');
            $wallet_transaction->save();
    
            // dd($custom_data, $pick_type,$data);
            return response()->json(['order_one' => $buy_order->id,'order_two' => $buy_orderxo->id,'status' => 'DOUBLE']);

        }
        else
        {
            $buy_order = new buy_order;
            $buy_order->user_id = $user_id;
            $buy_order->name = $name;
            $buy_order->type = $pick_type;
            $buy_order->percent = '10';
            $buy_order->total_price = '0';
            $buy_order->box_id = $box_id->id;
            $buy_order->created_at = Carbon::now('Asia/Bangkok');
            $buy_order->save();
    
            // 0 => array:2 [
            //     "number" => "1"
            //     "price" => null
            //   ]
            $total = 0;
            foreach($data as $r)
            {
                $price = str_replace(',','',$r['price']); 
                // dd($r['number'],$r['price']);
                $number = $r['number'];
                if($r['number']=="ແທງສູງ")
                {
                    $number = "HIGHT";
                }
                elseif($r['number']=="ແທງຕ່ຳ")
                {
                    $number = "LOW"; 
                }
                elseif($r['number']=="ແທງຄີກ")
                {
                    $number = "KICK"; 
                }
                elseif($r['number']=="ແທງຄູ່")
                {
                    $number = "COOL"; 
                }
                else
                {
    
                }
                $buy = new buy;
                $buy->name = $name;
                $buy->buy_order = $buy_order->id;
                $buy->user_id = $user_id;
                $buy->number = $number;
                $buy->price = $price;
                // $buy->price = '1000';
                $buy->type = $pick_type;
                $buy->box_id =  $box_id->id;
                $buy->created_at = Carbon::now('Asia/Bangkok');
                $buy->save();
                // $total += $r['price'];
                $total += $price;
            }
    
    
    
    
            $buy_order->total_price = $total;
            $buy_order->save();
    
    
            $wallet_transaction = new wallet_transaction;
            $wallet_transaction->user_id = $user_id;
            $wallet_transaction->status = "SUCCESS";
            $wallet_transaction->amount = '-' . $total;
            $wallet_transaction->type = "Purchase"; 
            $wallet_transaction->sort = $buy_order->id;
            $wallet_transaction->created_at = Carbon::now('Asia/Bangkok');
            $wallet_transaction->save();
    
    
            // dd($custom_data, $pick_type,$data);
            return response()->json(['order' => $buy_order->id,'status' => 'DONE']);
        }
       

    }

    
    public function bill($id)
    {
       $user_id = session('user_id');
       $buy = buy::where('user_id', $user_id)->where('buy_order',$id)->get();
       $buy_order = buy_order::where('user_id', $user_id)->where('id',$id)->first();
       if($buy)
       { 
        return view('front.bill.index',compact('buy','buy_order')); 
       }
       else
       {

       }
    }

    
    public function bill_two($id,$di)
    {
       $user_id = session('user_id');
       $buy = buy::where('user_id', $user_id)->where('buy_order',$id)->get();
       $buy_order = buy_order::where('user_id', $user_id)->where('id',$id)->first();
       
       $buyxo = buy::where('user_id', $user_id)->where('buy_order',$di)->get();
       $buy_orderxo = buy_order::where('user_id', $user_id)->where('id',$di)->first();
       if($buy)
       { 
        return view('front.bill.sub_index',compact('buy','buyxo','buy_order','buy_orderxo')); 
       }
       else
       {

       }
    }

    public function hightlow()
    {
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
            $gain_number = 69;
            $head_menu = 'ສູງຕໍ່າ';

            return view('front.buy.hightlow')->with('money',$money)->with('gain_number',$gain_number)
            ->with('head_menu',$head_menu);
    }

    
    public function kickcool()
    {
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
            $gain_number = '12';
            $head_menu = 'ຄີກຄູ່';

            return view('front.buy.hightlow')->with('money',$money)->with('gain_number',$gain_number)
            ->with('head_menu',$head_menu);
    }

}
