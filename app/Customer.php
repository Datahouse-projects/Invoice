<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $table ='invoice_customers';
       protected $fillable = [
        'name',
        'phone'
    ];

    
       public function orders()
       {
       	return $this->hasMany('App\Order');

    }

}
