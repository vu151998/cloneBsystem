<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerName')->nullable();
            $table->string('customerEmail')->nullable();
            $table->string('customerPhone')->nullable();
            $table->string('customerShipping')->nullable();
            $table->tinyInteger('cityID')->nullable();
            $table->tinyInteger('districtID')->nullable();
            $table->integer('product_id');
            $table->integer('quantity');
            $table->float('salePrice', 8, 2)->nullable();
            $table->date('orderDate');
            $table->string('note')->nullable();
            $table->tinyInteger('install')->default(1); //1 không , 2 có 
            $table->tinyInteger('status')->default(2);
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
        Schema::dropIfExists('order_products');
    }
}
