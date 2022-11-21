<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'code',
        'price',
        'denom',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getCategoryAttribute()
    {
        return Product::find($this->product_id)->category ?? null;
    }
}
