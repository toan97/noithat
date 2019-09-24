<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->bigInteger('cate_id')->unsigned();
            $table->string('image');
            $table->string('short_desc');
            $table->text('detail');
            $table->Integer('views')->default(0);
            $table->Integer('star')->default(0);
            $table->Integer('sold')->default(0);
            $table->Integer('ori_price');
            $table->Integer('sell_price');
            $table->string('color');
            $table->string('material');
            $table->string('manufacturer');
            $table->foreign('cate_id')->references('id')->on('categories');
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
