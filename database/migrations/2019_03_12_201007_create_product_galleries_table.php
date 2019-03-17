<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->unsignedInteger('product_id')->index();
//            $table->unsignedInteger('gallery_id')->index();
//
//            $table->timestamps();
//
//            $table->foreign('product_id')->reference('id')->on('products');
//            $table->foreign('gallery_id')->reference('id')->on('galleries');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_galleries');
    }
}
