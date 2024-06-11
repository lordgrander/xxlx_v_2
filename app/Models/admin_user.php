<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_user extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $table = 'admin_user';   
    protected $fillable = [  
        'name',  
        'login',  
        'password',   
        'status',   
    ];
}
