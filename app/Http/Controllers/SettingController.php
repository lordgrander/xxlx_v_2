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

class SettingController extends Controller
{
    public function profile()
    {
        $users = Users::where('id',session('user_id'))->first();
        return view("front.setting.profile",compact('users'));
    }

    public function profile_process(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
   
        $user = Users::where('id',session('user_id'))->first(); 
        $user->username = $name;
        $user->phone = $phone;
        $user->save();
        return response()->json(['status' => '200', 'message' => 'Success']);
    }

    public function password()
    {
        $users = Users::where('id',session('user_id'))->first();
        return view("front.setting.password",compact('users')); 
    }


    public function password_name_check(Request $request)
    {
        $name = $request->name;
        $password = $request->password;

        $users = Users::where('id',session('user_id'))->first();
        if($users->name==$name)
        {
            $users->password = Hash::make($request->input('password'));
            $users->save();
            return response()->json(['status' => '200', 'message' => 'Success']); 
        }
        else
        {
            $users = Users::where('name', $name)->whereNotIn('id', [session('user_id')])->first();
            if($users)
            {
                return response()->json(['status' => '404', 'message' => 'Failed']);  
            }
            else
            {
                $users = Users::where('id',session('user_id'))->first();
                $users->name = $name; 
                if($password)
                {
                    $users->password = Hash::make($request->input('password')); 
                }
                $users->save();
                return response()->json(['status' => '200', 'message' => 'Success']); 

            }
        }

    }
}
