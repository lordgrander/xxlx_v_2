<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prize extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $table = 'prize';   
    protected $fillable = [  
        'type',
        'name',
        'mul', 
    ];

}
