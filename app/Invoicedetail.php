<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoicedetail extends Model
{
      protected $fillable = [
        'invoicedetail_id', 'product_id',
        'quantity', 'warehouse',
    ];

}
