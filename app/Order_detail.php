<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
protected $table ='invoice_order_details';
      protected $fillable = [
        'product_id', 
        'customer_id',    
        'unit_price',
        'quantity', 
        'amount',
        'vat',
        'line_total',
    ];

      public function products(){
        return $this->belongsTo('App\Product');
       }

       public function customers(){
        return $this->belongsTo('App\Customer');
       }
}
