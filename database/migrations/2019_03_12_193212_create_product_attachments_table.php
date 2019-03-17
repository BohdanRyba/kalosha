<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->unsignedInteger('products_id')->index();
//            $table->unsignedInteger('attachment_id')->index();
//            $table->timestamps();
//
//            $table->foreign('products_id')->reference('id')->on('products');
//            $table->foreign('attachment_id')->reference('id')->on('attachments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attachments');
    }
}
