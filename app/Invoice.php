<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
        protected $table ='invoice_invoices';	
         protected $fillable = [
       'customer_id', 'invoice_date', 
        'employee_id'
    ];

}
