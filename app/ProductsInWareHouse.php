<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsInWareHouse extends Model
{
         protected $fillable = [
        'pinwarehouses_id', 'quantity',
        'warehouses_id'
 ];
}
