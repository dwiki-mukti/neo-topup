<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndpointApi extends Model
{
    use HasFactory;

    protected $fillable = [
        'endpoint'
    ];
}
