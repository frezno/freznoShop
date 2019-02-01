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
            $table->increments('id');
            $table->string('sku', 30)->unique();
            $table->string('sku_oem', 30)->unique()->nullable();
            $table->string('ean', 14)->unique()->nullable();
            $table->unsignedTinyInteger('qty');
            $table->unsignedTinyInteger('unit_id')->default(1);
            $table->unsignedTinyInteger('stockstatus_id')->default(1);
            $table->unsignedInteger('manufacturer_id')->nullable();
            $table->boolean('free_shipping')->default(true);
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('stockstatus_id')->references('id')->on('stockstatuses');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
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
