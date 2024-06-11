<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beta_do extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $table = 'beta_do';   
    protected $fillable = [  
        'admin_id',  
        'what',  
        'date',   
        'code',   
    ];
}
