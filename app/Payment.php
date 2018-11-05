<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
protected $table ='invoice_payments';
      protected $fillable = [
        'order_id',
        'date', 
        'amount',
        ];

        public function orders(){
        return $this->belongsTo('App\Order');
       }
}

