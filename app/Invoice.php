<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
       protected $fillable = [
        'invoice_id', 'customer_id',
        'invoice_date', 'employee_id'
    ];

}
