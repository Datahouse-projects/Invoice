<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
	 protected $table ='invoice_warehouses';
   protected $fillable = [
        'wanehouse_name',
       ];

}
