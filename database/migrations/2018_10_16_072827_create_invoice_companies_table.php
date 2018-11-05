<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_companies', function (Blueprint $table) {
           $table->string('name');
            $table->integer('tin');
            $table->integer('vrn');
            $table->integer('reg_no');
            $table->string('adress');
            $table->string('email');
            $table->string('phone');
            $table->string('logo');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_companies');
    }
}
