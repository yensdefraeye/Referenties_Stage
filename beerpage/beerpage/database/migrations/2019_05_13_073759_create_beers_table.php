<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('name');
            $table->string('alcohol_content');
            $table->unsignedBigInteger('category_id');
            //$table->foreign('category_id')->references('id')->on('categories');
            $table->string('origin_country');
            $table->string('plato_scale');
            $table->unsignedBigInteger('brewery_id');
            //$table->foreign('brewery_id')->references('id')->on('breweries');
            $table->string('image_path');
            $table->text('description');
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
        Schema::dropIfExists('beers');
    }
}
