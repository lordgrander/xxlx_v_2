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

class Start extends Controller
{
    public function index()
    {
        $box = box::orderby('created_at','DESC')->get();
        return view('welcome',compact('box'));
    }

    public function login()
    { 
        return view('front.login.index');
    } 
    
    public function login_start(Request $request)
    {
        $username = $request->input('name');
        $password = $request->input('password');    
 
        $user = Users::where('name', $username)->first();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Invalid credentials']); 
        }

        if (Hash::check($password, $user->password)) {
            // Password matches, create session and return response
            session(['user_id' => $user->id, 'user_name' => $user->user_name, 'status' => $user->status, 'user_encode' => $user->encode]);

            if(!$user->name)
            {
                return response()->json(['success' => true]);
            }
            else
            {
                return response()->json(['success' => true]);
            }
        } else {
                return response()->json(['success' => false, 'message' => 'Invalid credentials']);

        } 
    }

    
    public function logout()
    { 
        if(session('user_id'))
        {
            session()->flush(['user_id', 'user_name', 'user_encode','admin_id','admin_name','admin_status']); 
            return redirect()->route('start'); 

        }
        else
        {
            session()->flush(['user_id', 'user_name', 'user_encode','admin_id','admin_name','admin_status']);  
            return redirect()->route('admin.login');  
        }
    }


    
    public function register()
    {  
        return view('front.register.index'); 
    } 

    
    
    public function register_process(Request $request)
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
            $customer->save(); 
    
            
            $wallet_transaction = new wallet_transaction;
            $wallet_transaction->user_id = $customer->id;
            $wallet_transaction->status = "SUCCESS";
            $wallet_transaction->amount = '500000';
            $wallet_transaction->type = "Deposit"; 
            $wallet_transaction->sort = "0";
            $wallet_transaction->created_at = Carbon::now('Asia/Bangkok');
            $wallet_transaction->save();
    
            session(['user_id' => $customer->id, 'user_name' => $customer->user_name, 'status' => $customer->status, 'user_encode' => $customer->encode]);
            // Return a success response
            return response()->json(['message' => 'Registration successful',"status"=>"SUCCESS"], 200);
        }

        
    }


}
