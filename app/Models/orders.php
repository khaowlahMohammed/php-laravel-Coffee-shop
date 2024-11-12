<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = [
        'costumer_id',
        'products_id',
        'status',
    ];
}



