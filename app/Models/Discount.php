<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'relation_id',
        'nilai_discount',
        'discount_category',
        'start_at',
        'end_at',
    ];
}
