<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Str; 
Use App\Models\admin_user;
use Carbon\Carbon;
use session;
Use Hash; 
use Illuminate\Support\Facades\DB;
 

class AdminloginController extends Controller
{
    public function login()
    {
        return view('back.login.index');
    }

    public function start(Request $request)
    { 
        $username = $request->input('name');
        $password = $request->input('password');    
 
        $user = admin_user::where('login', $username)->first();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Invalid credentials']); 
        }

        if (Hash::check($password, $user->password)) {  
            // Password matches, create session and return response
            session(['admin_id' => $user->id, 'admin_name' => $user->name, 'admin_status' => $user->status, 'admin_encode' => $user->encode]); 
            $user->last_login_ip = $request->ip(); // Get the user's IP address
            $user->save();
                return response()->json(['success' => true]); 
        } else {
                return response()->json(['success' => false, 'message' => 'Invalid credentials']); 
        } 
    }
}
