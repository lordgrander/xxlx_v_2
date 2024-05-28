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
 
Use App\Models\another_box_contain;
Use App\Models\another_box_leader;

class AnotherController extends Controller
{
    public function index()
    {
        $another_box_leader = another_box_leader::where('id','1')->first();
        $select = another_box_contain::orderby('id','DESC')->first(); 
        $up = '';
        $down = '';
        $one = '';
        $two = '';
        $three = '';
        $four = '';
        $five = '';
        $six = '';
        $seven = '';
        $eight = '';
        $nine = '';
        $ten = '';
        $eleven = '';
        $twelve = '';
        $thirteen = '';
        $fourteen = '';
        $fifteen = '';
        $sixteen = '';
        $seventeen = '';
        $eighteen = '';
        $nineteen = '';
        $twenty = '';
        $twenty_one = '';
        $twenty_two = '';
        $twenty_three = '';
        $twenty_four = '';
        $twenty_five = '';
        $display_up = '';
        $display_down = '';
        $display_one = '';
        $display_two = '';
        $display_three = '';
        $display_four = '';
        $display_five = '';
        $display_six = '';
        $display_seven = '';
        $display_eight = '';
        $display_nine = '';
        $display_ten = '';
        $display_eleven = '';
        $display_twelve = '';
        $display_thirteen = '';
        $display_fourteen = '';
        $display_fifteen = '';
        $display_sixteen = '';
        $display_seventeen = '';
        $display_eighteen = '';
        $display_nineteen = '';
        $display_twenty = '';
        $display_twenty_one = '';
        $display_twenty_two = '';
        $display_twenty_three = '';
        $display_twenty_four = '';
        $display_twenty_five = '';

        if($select->status=='TELLING' || $select->status=='WAITING')
        {
            if($select->up=='')
            {
                $up = '';
                $display_up = '<div class="svg-div-m"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $up = $select->up;
                $display_up = $select->up;
            }
            if($select->down=='')
            {
                $down = '';
                $display_down = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $down = $select->down;
                $display_down = $select->down;
            }
            if($select->one=='')
            {
                $one = '';
                $display_one = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $one = $select->one;
                $display_one = $select->one;
            }
            if($select->two=='')
            {
                $two = '';
                $display_two = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $two = $select->two;
                $display_two = $select->two;
            }
            if($select->three=='')
            {
                $three = '';
                $display_three = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $three = $select->three;
                $display_three = $select->three;
            }
            if($select->four=='')
            {
                $four = '';
                $display_four = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $four = $select->four;
                $display_four = $select->four;
            }
            if($select->five=='')
            {
                $five = '';
                $display_five = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $five = $select->five;
                $display_five = $select->five;
            }
            if($select->six=='')
            {
                $six = '';
                $display_six = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $six = $select->six;
                $display_six = $select->six;
            }
            if($select->seven=='')
            {
                $seven = '';
                $display_seven = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $seven = $select->seven;
                $display_seven = $select->seven;
            }
            if($select->eight=='')
            {
                $eight = '';
                $display_eight = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $eight = $select->eight;
                $display_eight = $select->eight;
            }
            if($select->nine=='')
            {
                $nine = '';
                $display_nine = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $nine = $select->nine;
                $display_nine = $select->nine;
            }
            if($select->ten=='')
            {
                $ten = '';
                $display_ten = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $ten = $select->ten;
                $display_ten = $select->ten;
            }
            if($select->eleven=='')
            {
                $eleven = '';
                $display_eleven = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $eleven = $select->eleven;
                $display_eleven = $select->eleven;
            }
            if($select->twelve=='')
            {
                $twelve = '';
                $display_twelve = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twelve = $select->twelve;
                $display_twelve = $select->twelve;
            }
            if($select->thirteen=='')
            {
                $thirteen = '';
                $display_thirteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $thirteen = $select->thirteen;
                $display_thirteen = $select->thirteen;
            }
            if($select->fourteen=='')
            {
                $fourteen = '';
                $display_fourteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $fourteen = $select->fourteen;
                $display_fourteen = $select->fourteen;
            }
            if($select->fifteen=='')
            {
                $fifteen = '';
                $display_fifteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $fifteen = $select->fifteen;
                $display_fifteen = $select->fifteen;
            }
            if($select->sixteen=='')
            {
                    $sixteen = '';
                    $display_sixteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                    $sixteen = $select->sixteen;
                    $display_sixteen = $select->sixteen;
            }
            if($select->seventeen=='')
            {
                $seventeen = '';
                $display_seventeen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $seventeen = $select->seventeen;
                $display_seventeen = $select->seventeen;
            }
            if($select->eighteen=='')
            {
                $eighteen = '';
                $display_eighteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $eighteen = $select->eighteen;
                $display_eighteen = $select->eighteen;
            }
            if($select->nineteen=='')
            {
                $nineteen = '';
                $display_nineteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $nineteen = $select->nineteen;
                $display_nineteen = $select->nineteen;
            }
            if($select->twenty=='')
            {
                $twenty = '';
                $display_twenty = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty = $select->twenty;
                $display_twenty = $select->twenty;
            }
            if($select->twenty_one=='')
            {
                $twenty_one = '';
                $display_twenty_one = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_one = $select->twenty_one;
                $display_twenty_one = $select->twenty_one;
            }
            if($select->twenty_two=='')
            {
                $twenty_two = '';
                $display_twenty_two = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_two = $select->twenty_two;
                $display_twenty_two = $select->twenty_two;
            }
            if($select->twenty_three=='')
            {
                $twenty_three = '';
                $display_twenty_three = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_three = $select->twenty_three;
                $display_twenty_three = $select->twenty_three;
            }
            if($select->twenty_four=='')
            {
                $twenty_four = '';
                $display_twenty_four = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_four = $select->twenty_four;
                $display_twenty_four = $select->twenty_four;
            }
            if($select->twenty_five=='')
            {
                $twenty_five = '';
                $display_twenty_five = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_five = $select->twenty_five;
                $display_twenty_five = $select->twenty_five;
            }
        }
        else
        {
            $up = $select->up;
            $down = $select->down;
            $one = $select->one;
            $two = $select->two;
            $three = $select->three;
            $four = $select->four;
            $five = $select->five;
            $six = $select->six;
            $seven = $select->seven;
            $eight = $select->eight;
            $nine = $select->nine;
            $ten = $select->ten;
            $eleven = $select->eleven;
            $twelve = $select->twelve;
            $thirteen = $select->thirteen;
            $fourteen = $select->fourteen;
            $fifteen = $select->fifteen;
            $sixteen = $select->sixteen;
            $seventeen = $select->seventeen;
            $eighteen = $select->eighteen;
            $nineteen = $select->nineteen;
            $twenty = $select->twenty;
            $twenty_one = $select->twenty_one;
            $twenty_two = $select->twenty_two;
            $twenty_three = $select->twenty_three;
            $twenty_four = $select->twenty_four;
            $twenty_five = $select->twenty_five;

            $display_up = $select->up;
            $display_down = $select->down;
            $display_one = $select->one;
            $display_two = $select->two;
            $display_three = $select->three;
            $display_four = $select->four;
            $display_five = $select->five;
            $display_six = $select->six;
            $display_seven = $select->seven;
            $display_eight = $select->eight;
            $display_nine = $select->nine;
            $display_ten = $select->ten;
            $display_eleven = $select->eleven;
            $display_twelve = $select->twelve;
            $display_thirteen = $select->thirteen;
            $display_fourteen = $select->fourteen;
            $display_fifteen = $select->fifteen;
            $display_sixteen = $select->sixteen;
            $display_seventeen = $select->seventeen;
            $display_eighteen = $select->eighteen;
            $display_nineteen = $select->nineteen;
            $display_twenty = $select->twenty;
            $display_twenty_one = $select->twenty_one;
            $display_twenty_two = $select->twenty_two;
            $display_twenty_three = $select->twenty_three;
            $display_twenty_four = $select->twenty_four;
            $display_twenty_five = $select->twenty_five;
        }

        return view('another.index.index',compact("select","another_box_leader"))
        ->with('up',$up)
        ->with('down',$down)
        ->with('one',$one)
        ->with('two',$two)
        ->with('three',$three)
        ->with('four',$four)
        ->with('five',$five)
        ->with('six',$six)
        ->with('seven',$seven)
        ->with('eight',$eight)
        ->with('nine',$nine)
        ->with('ten',$ten)
        ->with('eleven',$eleven)
        ->with('twelve',$twelve)
        ->with('thirteen',$thirteen)
        ->with('fourteen',$fourteen)
        ->with('fifteen',$fifteen)
        ->with('sixteen',$sixteen)
        ->with('seventeen',$seventeen)
        ->with('eighteen',$eighteen)
        ->with('nineteen',$nineteen)
        ->with('twenty',$twenty)
        ->with('twenty_one',$twenty_one)
        ->with('twenty_two',$twenty_two)
        ->with('twenty_three',$twenty_three)
        ->with('twenty_four',$twenty_four)
        ->with('twenty_five',$twenty_five)
        ->with('display_up',$display_up)
        ->with('display_down',$display_down)
        ->with('display_one',$display_one)
        ->with('display_two',$display_two)
        ->with('display_three',$display_three)
        ->with('display_four',$display_four)
        ->with('display_five',$display_five)
        ->with('display_six',$display_six)
        ->with('display_seven',$display_seven)
        ->with('display_eight',$display_eight)
        ->with('display_nine',$display_nine)
        ->with('display_ten',$display_ten)
        ->with('display_eleven',$display_eleven)
        ->with('display_twelve',$display_twelve)
        ->with('display_thirteen',$display_thirteen)
        ->with('display_fourteen',$display_fourteen)
        ->with('display_fifteen',$display_fifteen)
        ->with('display_sixteen',$display_sixteen)
        ->with('display_seventeen',$display_seventeen)
        ->with('display_eighteen',$display_eighteen)
        ->with('display_nineteen',$display_nineteen)
        ->with('display_twenty',$display_twenty)
        ->with('display_twenty_one',$display_twenty_one)
        ->with('display_twenty_two',$display_twenty_two)
        ->with('display_twenty_three',$display_twenty_three)
        ->with('display_twenty_four',$display_twenty_four)
        ->with('display_twenty_five',$display_twenty_five);
    }


    public function status(Request $request)
    {
        $another_box_contain = another_box_contain::orderby('id','DESC')->first(); 
        $another_box_contain->status = $request->status;
        $another_box_contain->save();

        return response()->json(['status' => 'DONE']);

    }

    
    public function number(Request $request)
    {
        $another_box_leader = another_box_leader::where('id','1')->first(); 
        $another_box_leader->up = $request->top;
        $another_box_leader->down = $request->bottom;
        $another_box_leader->save();

        return response()->json(['status' => 'DONE']); 
    }

    
    public function new(Request $request)
    {
        $another_box_contain = new another_box_contain; 
        $another_box_contain->status = "WAITING";
        $another_box_contain->created_at =  Carbon::now('Asia/Bangkok');
        $another_box_contain->save();

        return response()->json(['status' => 'DONE']);

    }

    
    public function save_number(Request $request)
    {
        $position= '';

        $select = another_box_contain::orderby('id','DESC')->first(); 
        if($request->position=="number_five_one")
        {
            $select->one = $request->result;
        }
        elseif($request->position=="number_five_two")
        {
            $select->two = $request->result;
        }
        elseif($request->position=="number_five_three")
        {
            $select->three = $request->result;
        }
        elseif($request->position=="number_five_four")
        {
            $select->four = $request->result;
        }
        elseif($request->position=="number_five_five")
        {
            $select->five = $request->result;
        }
        elseif($request->position=="number_five_six")
        {
            $select->six = $request->result;
        }
        elseif($request->position=="number_five_seven")
        {
            $select->seven = $request->result;
        }
        elseif($request->position=="number_five_eight")
        {
            $select->eight = $request->result;
        }
        elseif($request->position=="number_four_one")
        {
            $select->nine = $request->result;
        }
        elseif($request->position=="number_four_two")
        {
            $select->ten = $request->result;
        }
        elseif($request->position=="number_four_three")
        {
            $select->eleven = $request->result;
        }
        elseif($request->position=="number_four_four")
        {
            $select->twelve = $request->result;
        }
        elseif($request->position=="number_four_five")
        {
            $select->thirteen = $request->result;
        }
        elseif($request->position=="number_four_six")
        {
            $select->fourteen = $request->result;
        }
        elseif($request->position=="number_four_seven")
        {
            $select->fifteen = $request->result;
        }
        elseif($request->position=="number_four_eight")
        {
            $select->sixteen = $request->result;
        }
        elseif($request->position=="number_four_nine")
        {
            $select->seventeen = $request->result;
        }
        elseif($request->position=="number_four_ten")
        {
            $select->eighteen = $request->result;
        }
        elseif($request->position=="number_three_one")
        {
            $select->nineteen = $request->result;
        }
        elseif($request->position=="number_three_two")
        {
            $select->twenty = $request->result;
        }
        elseif($request->position=="number_three_three")
        {
            $select->twenty_one = $request->result;
        }
        elseif($request->position=="number_two_one")
        {
            $select->twenty_two = $request->result;
        }
        elseif($request->position=="number_two_two")
        {
            $select->twenty_three = $request->result;
        }
        elseif($request->position=="number_two_three")
        {
            $select->twenty_four = $request->result;
        }
        elseif($request->position=="number_two_four")
        {
            $select->twenty_five = $request->result;
        }
        elseif($request->position=="number_five_top")
        {
            $another_box_leader = another_box_leader::where('id','1')->first();

            $select->up = $another_box_leader->up; 
            $select->save();
            return response()->json(['status' => 'DONEx','result'=>$another_box_leader->up]);

        }
        elseif($request->position=="number_five_buttom")
        {
            $another_box_leader = another_box_leader::where('id','1')->first();

            $select->down = $another_box_leader->down; 
            $select->save();
            return response()->json(['status' => 'DONEx','result'=>$another_box_leader->down]);
            
        } 

        $select->save();
        

        return response()->json(['status' => 'DONE']);

    }


    public function control()
    {
        return view('another.index.control');
    }
}
