<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class another_box_contain extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $table = 'another_box_contain';   
    protected $fillable = [   
        'up',
        'down',
        'one',
        'two',
        'three',
        'four',
        'five',
        'six',
        'seven',
        'eight',
        'nine',
        'ten',
        'eleven',
        'twelve',
        'thirteen',
        'fourteen',
        'fifteen',
        'sixteen',
        'seventeen',
        'eighteen',
        'nineteen',
        'twenty',
        'twenty_one',
        'twenty_two',
        'twenty_three',
        'twenty_four',
        'twenty_five',
        'created_at',
        'status',
    ];
}
