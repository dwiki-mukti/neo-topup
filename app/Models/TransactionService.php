<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionService extends Model
{
    use HasFactory;

    protected $fillable = [
        'trx_detail_id',
        'data_player',
    ];

    public function getCategoryAttribute()
    {
        return Product::find($this->product_id)->category;
    }
}
