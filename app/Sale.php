<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
       protected $fillable = [
        'sale_id', 'product_id',
        'employee_id',
    ];

}
