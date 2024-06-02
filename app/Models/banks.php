<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banks extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $table = 'banks';   
    protected $fillable = [   
        'name',
        'created_at',
    ];

    public function bankINout()
    {
        return $this->hasMany(order_inout::class, 'bank_id');
    }

}
