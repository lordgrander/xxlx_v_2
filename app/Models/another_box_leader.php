<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class another_box_leader extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $table = 'another_box_leader';   
    protected $fillable = [   
        'up',
        'down',
    ];
}
