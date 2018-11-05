<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

	 protected $table ='invoice_sales';
       protected $fillable = [
        'product_id',
        'employee_id',
    ];

}
