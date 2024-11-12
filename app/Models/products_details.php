<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products_details extends Model
{
    protected $fillable = [
        'id_products',
        'price',
        'qty',
        'image',
        'color',
    ];

  
}
