<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class costumers extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}

