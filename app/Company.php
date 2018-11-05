<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table ='invoice_companies';
       protected $fillable = [
       'name',
       'tin',
       'vrn',
       'reg_no',
       'adress',
       'email',
       
       'phone',
    ];

}

