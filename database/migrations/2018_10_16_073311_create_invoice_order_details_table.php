<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_order_details', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('unit_price');
            $table->integer('quantity');
            $table->integer('amount');
            $table->integer('VAT');
            $table->integer('line_total');

            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('invoice_products');
           $table->integer('customer_id')->unsigned();
           $table->foreign('customer_id')->references('id')->on('invoice_customers');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('invoice_products');
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
        Schema::dropIfExists('invoice_order_details');
    }
}
