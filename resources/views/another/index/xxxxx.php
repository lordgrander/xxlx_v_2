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

class AnotherController extends Controller
{
    public function index()
    {
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

        if($select->status=='TELLING' || $select->status=='WAITING')
        {
            if($select->up=='')
            {
                $up = '<div class="svg-div-m"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $up = $select->up;
            }
            if($select->down=='')
            {
                $down = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $down = $select->down;
            }
            if($select->one=='')
            {
                $one = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $one = $select->one;
            }
            if($select->two=='')
            {
                $two = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $two = $select->two;
            }
            if($select->three=='')
            {
                $three = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $three = $select->three;
            }
            if($select->four=='')
            {
                $four = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $four = $select->four;
            }
            if($select->five=='')
            {
                $five = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $five = $select->five;
            }
            if($select->six=='')
            {
                $six = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $six = $select->six;
            }
            if($select->seven=='')
            {
                $seven = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $seven = $select->seven;
            }
            if($select->eight=='')
            {
                $eight = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $eight = $select->eight;
            }
            if($select->nine=='')
            {
                $nine = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $nine = $select->nine;
            }
            if($select->ten=='')
            {
                $ten = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $ten = $select->ten;
            }
            if($select->eleven=='')
            {
                $eleven = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $eleven = $select->eleven;
            }
            if($select->twelve=='')
            {
                $twelve = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twelve = $select->twelve;
            }
            if($select->thirteen=='')
            {
                $thirteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $thirteen = $select->thirteen;
            }
            if($select->fourteen=='')
            {
                $fourteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $fourteen = $select->fourteen;
            }
            if($select->fifteen=='')
            {
                $fifteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $fifteen = $select->fifteen;
            }
            if($select->sixteen=='')
            {
                    $sixteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                    $sixteen = $select->sixteen;
            }
            if($select->seventeen=='')
            {
                $seventeen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $seventeen = $select->seventeen;
            }
            if($select->eighteen=='')
            {
                $eighteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $eighteen = $select->eighteen;
            }
            if($select->nineteen=='')
            {
                $nineteen = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $nineteen = $select->nineteen;
            }
            if($select->twenty=='')
            {
                $twenty = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty = $select->twenty;
            }
            if($select->twenty_one=='')
            {
                $twenty_one = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_one = $select->twenty_one;
            }
            if($select->twenty_two=='')
            {
                $twenty_two = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_two = $select->twenty_two;
            }
            if($select->twenty_three=='')
            {
                $twenty_three = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_three = $select->twenty_three;
            }
            if($select->twenty_four=='')
            {
                $twenty_four = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_four = $select->twenty_four;
            }
            if($select->twenty_five=='')
            {
                $twenty_five = '<div class="svg-div"><center><svg class="spin" style="fill:#9f9f9f;width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M222.7 32.1c5 16.9-4.6 34.8-21.5 39.8C121.8 95.6 64 169.1 64 256c0 106 86 192 192 192s192-86 192-192c0-86.9-57.8-160.4-137.1-184.1c-16.9-5-26.6-22.9-21.5-39.8s22.9-26.6 39.8-21.5C434.9 42.1 512 140 512 256c0 141.4-114.6 256-256 256S0 397.4 0 256C0 140 77.1 42.1 182.9 10.6c16.9-5 34.8 4.6 39.8 21.5z"/></svg></center></div>';
            }
            else
            {
                $twenty_five = $select->twenty_five;
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
        }

        return view('another.index.index',compact("select"))
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
        ->with('twenty_five',$twenty_five);
    }


    public function status(Request $request)
    {
        $select = another_box_contain::orderby('id','DESC')->first(); 
        $select->status = $request->status;
        $select->save();

        return response()->json(['status' => 'DONE']);

    }

    
    public function number(Request $request)
    {
        $select = another_box_contain::orderby('id','DESC')->first(); 
        $select->up = $request->top;
        $select->down = $request->bottom;
        $select->save();

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
        $select->save();

        return response()->json(['status' => 'DONE']);

    }
    public function control()
    {
        return view('another.index.control');
    }
}
