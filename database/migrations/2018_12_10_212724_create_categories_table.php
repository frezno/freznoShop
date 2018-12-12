<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('parent_id');
            $table->unsignedTinyInteger('parent_group_id');
            $table->string('name', 40);
            $table->string('slug', 100)->unique();
            $table->mediumText('info')->nullable();
            $table->string('image', 100)->nullable();
            $table->unsignedTinyInteger('sortorder')->default(1);
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
