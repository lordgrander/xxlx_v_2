<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_inout extends Model
{
    use HasFactory;
    public $timestamps = false; 
    
    protected $table = 'order_inout';   
    protected $fillable = [  
        'type',
        'date',
        'status',
        'img',
        'total',
        'user_id',
        'bank_transfer_id',
        'bank_number',
        'tran_id',
        'token',
        'cancel_reason',
    ];

    // public function bINbo()
    // {
    //     return $this->belongsTo(buy_order::class, 'buy_order','id');
    // }
    public function Havebank()
    {
        return $this->belongsTo(banks::class, 'bank_transfer_id','id');
    }

    
    public function HaveUser()
    {
        return $this->belongsTo(Users::class, 'user_id','id');
    }
}
