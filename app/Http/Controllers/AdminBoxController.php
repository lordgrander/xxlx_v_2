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
Use App\Models\box; 
Use App\Models\buy; 
Use App\Models\wallet_transaction; 
Use App\Models\prize; 
Use App\Models\buy_order; 
 

class AdminBoxController extends Controller
{
    public function create()
    {
       
        $box = box::orderby('created_at','DESC')->paginate(50, ['*'], 'page_name') ;
        foreach ($box as $r) {
            // Check if the token field is empty and generate a token if it is.
            if (empty($r->token)) {
                $r->token = Str::random(64);  // Generate a random token.
                $r->save(); // Save the token back to the database.
            }
        }
        return view('back.box.create',compact('box'));
    }

    public function create_process(Request $request)
    {

        $box = box::where("status",'BUYING')->orwhere("status",'TELLING')->first();

        if($box)
        { 
            return response()->json(['success' => false]); 
        }
        else
        { 
            $box = new box;
            $box->created_at = Carbon::now('Asia/Bangkok');
            $box->status= 'BUYING';
            $box->token = Str::random(64); 
            $box->save();

            $beta_do = new beta_do;  
            $beta_do->what = session("admin_name") . " ສ້າງງວດເລກ  ";
            $beta_do->code = 'box_create'; 
            $beta_do->admin_id = session("admin_id");
            $beta_do->date = Carbon::now('Asia/Bangkok');
            $beta_do->save();
     
            return response()->json(['success' => true]);  
        } 
    }

    public function to_tell_process(Request $request)
    {

        $box = box::where('id',$request->id)->where("status",'BUYING')->first();

        if($box)
        {
            $beta_do = new beta_do;  
            $beta_do->what = session("admin_name") . " ແຈ້ງບົນ : ".$request->up." ແຈ້ງລ່າງ : ". $request->down;
            $beta_do->code = 'box_tell'; 
            $beta_do->admin_id = session("admin_id");
            $beta_do->date = Carbon::now('Asia/Bangkok');
            $beta_do->save();

            $box->up = $request->up;
            $box->down = $request->down; 
            $box->status = 'CLOSED'; 
            $box->save();

            $up = $request->up;

            $single_first = substr($up, 2, 1);
            $single_sec = substr($up, 3, 1);
            $single_third = substr($up, 4, 1);
    
            $last_two = substr($up, 3, 2);
            $last_three = substr($up, 2, 3);
            $last_four = substr($up, 1, 4);
    
            $up_kick_cool = '';
            if ($last_two % 2 === 0) {
                $up_kick_cool = 'COOL';
            } else {
                $up_kick_cool = 'KICK';
            }

            $up_hight_low = '';
            if ($last_two >= 0 && $last_two <= 49) {
                $up_hight_low = 'LOW';
            } elseif ($last_two >= 50 && $last_two <= 99) {
                $up_hight_low = 'HIGHT';
            } else { 
            }
            
            $down = $request->down;  

            $single_first_down = substr($down, 2, 1);
            $single_sec_down = substr($down, 3, 1);
            $single_third_down = substr($down, 4, 1);
    
            $last_two_down = substr($down, 3, 2);
            $last_three_down = substr($down, 2, 3);
            $last_four_down = substr($down, 1, 4);


            $down_kick_cool = '';
            if ($last_two_down % 2 === 0) {
                $down_kick_cool = 'COOL';
            } else {
                $down_kick_cool = 'KICK';
            }
            
            
            $down_hight_low = '';
            if ($last_two_down >= 0 && $last_two_down <= 49) {
                $down_hight_low = 'LOW';
            } elseif ($last_two_down >= 50 && $last_two_down <= 99) {
                $down_hight_low = 'HIGHT';
            } else { 
            }
             

            $set_wing_up     = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$single_first.'" OR number = "'.$single_sec.'" OR number = "'.$single_third.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "WING"');
            $set_wing_down   = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$single_first_down.'" OR number = "'.$single_sec_down.'" OR number = "'.$single_third_down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "WING"');
            $set_two_up      = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$last_two.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "TWO"');
            $set_two_down    = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$last_two_down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "TWO"');
            $set_three_up    = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$last_three.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "THREE"');
            $set_three_down  = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$last_three_down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "THREE"');
            $set_four_up     = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$last_four.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "FOUR"');
            $set_four_down   = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$last_four_down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "FOUR"');
            $set_fiv_up      = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$up.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "FIVE"');
            $set_fiv_down    = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "FIVE"');
            $set_KC_up       = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$up_kick_cool.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "KICKCOOL"');
            $set_KC_down     = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$down_kick_cool.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "KICKCOOL"');
            $set_hl_up       = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$up_hight_low.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "HIGHTLOW"');
            $set_hl_down     = DB::update('UPDATE `buy` SET define = "WIN" WHERE (number = "'.$down_hight_low.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "HIGHTLOW"');
     

            // $select_wing_up     = DB::select('SELECT * FROM `buy` WHERE (number = "'.$single_first.'" OR number = "'.$single_sec.'" OR number = "'.$single_third.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "WING"');
            // $select_wing_down   = DB::select('SELECT * FROM `buy` WHERE (number = "'.$single_first_down.'" OR number = "'.$single_sec_down.'" OR number = "'.$single_third_down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "WING"');
            // $select_two_up      = DB::select('SELECT * FROM `buy` WHERE (number = "'.$last_two.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "TWO"');
            // $select_two_down    = DB::select('SELECT * FROM `buy` WHERE (number = "'.$last_two_down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "TWO"');
            // $select_three_up    = DB::select('SELECT * FROM `buy` WHERE (number = "'.$last_three.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "THREE"');
            // $select_three_down  = DB::select('SELECT * FROM `buy` WHERE (number = "'.$last_three_down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "THREE"');
            // $select_four_up     = DB::select('SELECT * FROM `buy` WHERE (number = "'.$last_four.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "FOUR"');
            // $select_four_down   = DB::select('SELECT * FROM `buy` WHERE (number = "'.$last_four_down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "FOUR"');
            // $select_fiv_up      = DB::select('SELECT * FROM `buy` WHERE (number = "'.$up.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "FIVE"');
            // $select_fiv_down    = DB::select('SELECT * FROM `buy` WHERE (number = "'.$down.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "FIVE"');
            // $select_KC_up       = DB::select('SELECT * FROM `buy` WHERE (number = "'.$up_kick_cool.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "KICKCOOL"');
            // $select_KC_down     = DB::select('SELECT * FROM `buy` WHERE (number = "'.$down_kick_cool.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "KICKCOOL"');
            // $select_hl_up       = DB::select('SELECT * FROM `buy` WHERE (number = "'.$up_hight_low.'") AND box_id = "'.$box->id.'" AND type = "UP" AND name = "HIGHTLOW"');
            // $select_hl_down     = DB::select('SELECT * FROM `buy` WHERE (number = "'.$down_hight_low.'") AND box_id = "'.$box->id.'" AND type = "DOWN" AND name = "HIGHTLOW"');
            

            $select_wing_up = Buy::where('box_id', $box->id)
                ->where('type', 'UP')
                ->where('name', 'WING')
                ->where(function($query) use ($single_first, $single_sec, $single_third) {
                    $query->where('number', $single_first)
                        ->orWhere('number', $single_sec)
                        ->orWhere('number', $single_third);
                })
                ->get();

            $select_wing_down = Buy::where('box_id', $box->id)
                ->where('type', 'DOWN')
                ->where('name', 'WING')
                ->where(function($query) use ($single_first_down, $single_sec_down, $single_third_down) {
                    $query->where('number', $single_first_down)
                          ->orWhere('number', $single_sec_down)
                          ->orWhere('number', $single_third_down);
                })
                ->get();

            $select_two_up = Buy::where('box_id', $box->id)
                ->where('type', 'UP')
                ->where('name', 'TWO')
                ->where('number', $last_two)
                ->get();
            
            $select_two_down = Buy::where('box_id', $box->id)
                ->where('type', 'DOWN')
                ->where('name', 'TWO')
                ->where('number', $last_two_down)
                ->get();
            
            $select_three_up = Buy::where('box_id', $box->id)
                ->where('type', 'UP')
                ->where('name', 'THREE')
                ->where('number', $last_three)
                ->get();
            
            $select_three_down = Buy::where('box_id', $box->id)
                ->where('type', 'DOWN')
                ->where('name', 'THREE')
                ->where('number', $last_three_down)
                ->get();
            
            $select_four_up = Buy::where('box_id', $box->id)
                ->where('type', 'UP')
                ->where('name', 'FOUR')
                ->where('number', $last_four)
                ->get();
            
            $select_four_down = Buy::where('box_id', $box->id)
                ->where('type', 'DOWN')
                ->where('name', 'FOUR')
                ->where('number', $last_four_down)
                ->get();
            
            $select_fiv_up = Buy::where('box_id', $box->id)
                ->where('type', 'UP')
                ->where('name', 'FIVE')
                ->where('number', $up)
                ->get();
            
            $select_fiv_down = Buy::where('box_id', $box->id)
                ->where('type', 'DOWN')
                ->where('name', 'FIVE')
                ->where('number', $down)
                ->get();
            
            $select_KC_up = Buy::where('box_id', $box->id)
                ->where('type', 'UP')
                ->where('name', 'KICKCOOL')
                ->where('number', $up_kick_cool)
                ->get();
            
            $select_KC_down = Buy::where('box_id', $box->id)
                ->where('type', 'DOWN')
                ->where('name', 'KICKCOOL')
                ->where('number', $down_kick_cool)
                ->get();
            
            $select_hl_up = Buy::where('box_id', $box->id)
                ->where('type', 'UP')
                ->where('name', 'HIGHTLOW')
                ->where('number', $up_hight_low)
                ->get();
            
            $select_hl_down = Buy::where('box_id', $box->id)
                ->where('type', 'DOWN')
                ->where('name', 'HIGHTLOW')
                ->where('number', $down_hight_low)
                ->get();
            
            foreach($select_wing_up as $r)
            {
                $this->addWin($r); 
            }

            foreach($select_wing_down as $r)
            {
                $this->addWin($r); 
            }

            foreach($select_two_up as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_two_down as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_three_up as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_three_down as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_four_up as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_four_down as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_fiv_up as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_fiv_down as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_KC_up as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_KC_down as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_hl_up as $r)
            {
                $this->addWin($r); 
            }
            foreach($select_hl_down as $r)
            {
                $this->addWin($r); 
            }


            return response()->json(['success' => true]); 
        }
        else
        { 
            return response()->json(['success' => false]); 
        } 
    }

    
    private  function addWin($r)
    {
        $prize = prize::where('type',$r->type)->where('name',$r->name)->first();
     
        $wallet_transaction = new wallet_transaction;
        $wallet_transaction->user_id = $r->user_id;
        $wallet_transaction->status = 'SUCCESS';
        $wallet_transaction->amount = '+' . ($r->price*$prize->mul);
        $wallet_transaction->type = "Win";
        $wallet_transaction->created_at = Carbon::now('Asia/Bangkok');
        $wallet_transaction->admin = session("admin_id");
        $wallet_transaction->box_id = $r->box_id;
        $wallet_transaction->save();

        $r->wallet_id = $wallet_transaction->id;
        $r->mul = $prize->mul;
        $r->save();
    }

    public function view_winner($token)
    {
        $box = box::where('token',$token)->first();
        if($box)
        {
            $select = buy::where('box_id',$box->id)->where('define','Win')->orderby('name','ASC')->get();
            return view('back.box.winner',compact('select'));
        }
        else
        {

        }
    }

    public function view_c()
    {
        $box_id = box::orderby('id','DESC')->limit(1)->get();
      
        $buy_order = buy_order::where('box_id', $box_id[0]->id)->orderby('id','DESC')->paginate(20, ['*'], 'page_name') ;
 
        return view('back.box.view',compact('buy_order'))->with('id', $box_id[0]->id);
    }

    public function view($id)
    {
        
        $buy_order = buy_order::where('box_id', $id)->orderby('id','DESC')->paginate(20, ['*'], 'page_name') ;
 
        return view('back.box.view',compact('buy_order'))->with('id', $id);
    }

    public function view_search($id, $filter, $id_search)
    {
        $buy_order = buy_order::where('box_id', $id);
    
        if ($filter!='0') {
            $buy_order->where('name', $filter);
           
        }
    
        if ($id_search!='0') {
            $buy_order->where('id', $id_search);
        }
    
        $buy_order = $buy_order->orderBy('id', 'DESC')->paginate(20, ['*'], 'page_name');
    
        return view('back.box.view', compact('buy_order'))->with('id', $id);
    }
    

    public function view_total($id)
    {
        $com = prize::all(); 
        $get_data = ['WING', 'TWO', 'THREE', 'FOUR', 'FIVE', 'HIGHTLOW', 'KICKCOOL'];
        // Initialize the array with null values
        foreach ($get_data as $name) {
            $get_data[$name] = null;
        }

        // Map the 'com' values to their respective 'name' keys
        foreach ($com as $coms) {
            if (array_key_exists($coms->name, $get_data)) {
                $get_data[$coms->name] = $coms->com;
            }
        }
        
        $box = box::where('id',$id)->first();
       
        $results = Buy::select('user_id', 'name', DB::raw('SUM(price) AS total_price'))
                        ->where('box_id',$id)
                        ->groupBy('user_id', 'name')
                        ->get();

            $request = DB::select('SELECT user_id, name, SUM(price) as total FROM `buy` WHERE box_id = "'.$id.'" GROUP BY user_id, name');
            $win = DB::select('SELECT user_id,  SUM(price*mul) as total_win FROM `buy` WHERE box_id = "'.$id.'" AND define = "WIN" GROUP BY user_id');
     
            $names = ['WING', 'TWO', 'THREE', 'FOUR', 'FIVE', 'HIGHTLOW', 'KICKCOOL'];

            $result = collect($request)
                ->groupBy('user_id')
                ->map(function ($group, $userId) use ($names) {
                    $userTotals = [
                        'user_id' => $userId
                    ];

                    foreach ($names as $name) {
                        $userTotals[$name] = $group->where('name', $name)->sum('total');
                    }

                    return $userTotals;
                })
                ->values()
                ->all();

            // Fetch usernames
            $userIds = array_column($result, 'user_id');
            $users = DB::table('users')->whereIn('id', $userIds)->get()->keyBy('id');

            foreach ($result as &$userResult) {
                $userResult['username'] = $users[$userResult['user_id']]->username ?? 'Unknown';
            }

        return view('back.box.total',compact('results','result','get_data','box','win'));
    }


}
