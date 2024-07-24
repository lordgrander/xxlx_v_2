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
Use App\Models\admin_user;
Use App\Models\wallet_transaction;
Use App\Models\banks;
Use App\Models\order_inout; 
Use App\Models\buy_order; 

class AdminController extends Controller
{
    public function index()
    {
        $in = order_inout::WHERE('status','Waiting')->WHERE('type','in')->orderby('id','DESC')->get();
        $out = order_inout::WHERE('status','Waiting')->WHERE('type','out')->orderby('id','DESC')->get();
        foreach ($out as $r) {
            // Check if the token field is empty and generate a token if it is.
            if (empty($r->token)) {
                $r->token = Str::random(64);  // Generate a random token.
                $r->save(); // Save the token back to the database.
            }
        }
        
        foreach ($in as $r) {
            // Check if the token field is empty and generate a token if it is.
            if (empty($r->token)) {
                $r->token = Str::random(64);  // Generate a random token.
                $r->save(); // Save the token back to the database.
            }
        }
        $buy_order = buy_order::orderby('id','DESC')->paginate(50, ['*'], 'page_name') ;
        return view('back.index',compact('in','out','buy_order'));
    }


    public function list()
    { 
        if(session('admin_status')=="Admin") 
        {
            $select = admin_user::get();
            return view('back.admin.index',compact('select'));

        }
        else
        {
            $select = admin_user::where('id',session('admin_id'))->get(); 
            return view('back.admin.index',compact('select'));

        }

    }

    

    public function create()
    {  
        return view('back.admin.create'  );
    }

    
    public function store(Request $request)
    {  
        $login = $request->login;
 
        $check = admin_user::where("login",$login)->first();
        if($check)
        {
            return response()->json(['message' => 'Registration Failed',"status"=>"Duplicate"], 200); 
        }
        else
        { 
            $password = $request->password;
            $status = $request->status;
            $name = $request->name;

            $admin_user = new admin_user;
            $admin_user->name = $name;
            $admin_user->password = Hash::make($password);
            $admin_user->login = $login;
            $admin_user->status =  $status; 
            $admin_user->encode = Str::random(64);  
            $admin_user->save(); 
    
            return response()->json(['message' => 'Registration successful',"status"=>"Success"], 200);
        }
    }

    public function editpassword($id)
    { 
        $select = admin_user::where('encode',$id)->first();
        if($select)
        { 
            return view('back.admin.edit_password',compact('select'))->with('encode',$id);
        }
        else
        {
            dd('');
        }
    }

    public function edit($id)
    { 
        $select = admin_user::where('encode',$id)->first();
        if($select)
        { 
            return view('back.admin.edit',compact('select'))->with('encode',$id);
        }
        else
        {
            dd('');
        }
    }

    public function update(Request $request)
    {   
        $password = $request->password;
        $status = $request->status;
        $name = $request->name;
        $login = $request->login;
        $encode = $request->encode;
        if(session('admin_status')=="Normal") 
        {
            $encode = session('admin_encode'); 
            $status = "Normal";
        }
        $admin_user = admin_user::where('encode', $encode)->first();
    
        if ($admin_user) {
            // Check if the login has changed
            if ($admin_user->login !== $login) {
                // Check if the new login is already used by another user
                $duplicate_check = admin_user::where('login', $login)->first();
                if ($duplicate_check) {
                    return response()->json(['message' => 'Login already in use', "status" => "Duplicate"], 200);
                }
            }
    
            // Update user details
            $admin_user->name = $name; 
            $admin_user->login = $login;
            $admin_user->status = $status; 
            $admin_user->save();

                
            $beta_do = new beta_do;  
            $beta_do->what = session("admin_name") . " ແກ້ໄຂ Admin  ". $name;
            $beta_do->code = 'admin_update'; 
            $beta_do->admin_id = session("admin_id");
            $beta_do->date = Carbon::now('Asia/Bangkok');
            $beta_do->save();
    
            return response()->json(['message' => 'Edit Success', "status" => "Success"], 200);
        } else {
            return response()->json(['message' => 'User not found', "status" => "Error"], 404);
        }
    }

    public function passwordupdate(Request $request)
    {   
        $password = $request->password;   
        $encode = $request->encode;
        if(session('admin_status')=="Normal") 
        {
            $encode = session('admin_encode'); 
        }
        $admin_user = admin_user::where('encode', $encode)->first();
    
        if ($admin_user) {  
            // Update user details 
            $admin_user->password = Hash::make($password); 
            $admin_user->save(); 
                
            $beta_do = new beta_do;  
            $beta_do->what = session("admin_name") . " ແກ້ໄຂລະຫັດຜ່ານ Admin  ". $admin_user->username;
            $beta_do->code = 'admin_update'; 
            $beta_do->admin_id = session("admin_id");
            $beta_do->date = Carbon::now('Asia/Bangkok');
            $beta_do->save();
    
            return response()->json(['message' => 'Edit Success', "status" => "Success"], 200);
        } else {
            return response()->json(['message' => 'User not found', "status" => "Error"], 404);
        }
    }
    
    
    

    public function delete(Request $request)
    { 
        
        $count = DB::select('SELECT COUNT(id) AS count FROM admin_user WHERE status = "Admin"');
        if($count[0]->count==1)
        {
            dd("ERROR");
        }
        else
        { 
            $select = admin_user::where('encode',$request->id)->first();
        
            $beta_do = new beta_do;  
            $beta_do->what = session("admin_name") . " ລົບ Admin  ". $select->name;
            $beta_do->code = 'admin_delete'; 
            $beta_do->admin_id = session("admin_id");
            $beta_do->date = Carbon::now('Asia/Bangkok');
            $beta_do->save();
            $delete = admin_user::where('encode',$request->id)->delete();
            return response()->json(['message' => 'Delete Success',"status"=>"Success"], 200); 
        }
    }

    public function do()
    {
        $beta_do = beta_do::orderby('id','DESC')->paginate(50, ['*'], 'page_name') ;
        return view('back.admin.do',compact('beta_do'));
    }
}
