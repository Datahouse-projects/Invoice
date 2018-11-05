<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	 protected $table ='invoice_employees';
      protected $fillable = [
        'fname',
        'sname', 
        'title',
        'contacts',
    ];
}
