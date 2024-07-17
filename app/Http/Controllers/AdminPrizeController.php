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
Use App\Models\prize;    
Use App\Models\beta_do;  
 

class AdminPrizeController extends Controller
{
    public function index()
    {
        $select = prize::get();
        return view('back.prize.index',compact('select'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $val = str_replace(',','',$request->val);
        $select = prize::where('id',$id)->first();
        $select->mul = $val;
        $select->save();

        
        $beta_do = new beta_do;  
        $beta_do->what = session("admin_name") . " ປັບເງິນລາງວັນ  ". $select->name . ' - ' . $select->type . ' ຈຳນວນ ' .$select->mul;
        $beta_do->code = 'admin_update'; 
        $beta_do->admin_id = session("admin_id");
        $beta_do->date = Carbon::now('Asia/Bangkok');
        $beta_do->save();

        return response()->json(['success' => true]); 
    }
}
