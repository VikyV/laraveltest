<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('legend', 100);

        });

        Schema::create('image_product', function (Blueprint $table) {
            $table->integer('image_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->primary(['image_id', 'product_id']);
            $table->foreign('image_id')->references('id')->on('image');
            $table->foreign('product_id')->references('id')->on('product');
            $table->tinyInteger('cover');

     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('image');
    }
}
