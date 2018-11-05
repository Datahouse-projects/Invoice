<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_orders', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->date('require_date');
            $table->integer('amount');
            $table->float('VAT');
            $table->integer('total');
            $table->string('paid_status');
            $table->integer('balance');
            $table->string('paid');
            $table->string('invoice_status');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('invoice_products');
            $table->foreign('customer_id')->references('id')->on('invoice_customers');
            $table->foreign('employee_id')->references('id')->on('invoice_employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_orders');
    }
}
