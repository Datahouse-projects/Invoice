<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoicedetail extends Model
{  
	protected $table = 'invoice_invoicedetails';
      protected $fillable = [
        'product_id' => 'required',
        'quantity' => 'required',   
        'warehouse_id' => 'required', 
    ];

}
