<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
 protected $table ='invoice_orders';
       protected $fillable = [
        'customer_id',
         'amount',
         'vat',
         'total',
         'paid_status',
         'paid',
         'require_date',
         'balance',
         'invoice_status',
    ];
       public function customers(){
        return $this->belongsTo('App\Customer');
       }
}




 //public function payments(){
        //return $this->hasMany('App\Payment');