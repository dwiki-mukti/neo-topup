<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionVoucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'trx_detail_id',
        'redeem_code',
    ];
}
