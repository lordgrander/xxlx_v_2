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
}
