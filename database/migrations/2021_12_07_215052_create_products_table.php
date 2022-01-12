<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('product_quantity');
            $table->string('old_price')->nullable();
            $table->string('new_price');
            $table->string('percent_of_discount')->nullable();
            $table->string('product_status');
            $table->string('product_color');
            $table->string('product_size');
            $table->string('product_disc');
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
            $table->string('image_five')->nullable();
            $table->string('image_six')->nullable();
            $table->string('image_seven')->nullable();
            $table->string('image_eight')->nullable();
            $table->string('image_nine')->nullable();
            $table->string('image_ten')->nullable();
            $table->string('image_eleven')->nullable();
            $table->string('image_twelve')->nullable();
            $table->string('image_therteen')->nullable();
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
        Schema::dropIfExists('products');
    }
}
