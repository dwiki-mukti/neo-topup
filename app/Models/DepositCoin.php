<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositCoin extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'nominal',
        'user_id',
        'payment_id',
        'status',
        'last_updated_status',
    ];
}
