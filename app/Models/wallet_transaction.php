<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wallet_transaction extends Model
{
    use HasFactory;
    protected $table = 'wallet_transaction';
    public $timestamps = false;

    // Define the primary key of the table
    protected $primaryKey = 'id';

    // Define the fillable columns
    protected $fillable = [
        'user_id',
        'amount',
        'type',
        'status',
        'created_at', 
        'sort', 
        'box_id', 
        'admin', 
        // Add other fields as needed
    ];

    
    public function wHaveuser()
    {
        return $this->belongsTo(Users::class, 'user_id','id');
    }
}
