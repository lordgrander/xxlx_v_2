<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class box extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $table = 'box';   
    protected $fillable = [   
        'up',
        'down',
        'created_at',
        'status',
        'c_up',
        'c_down',
        'token',
    ];
}
