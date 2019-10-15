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
            $table->bigIncrements('id');
            $table->string('kind');
            $table->timestamps();
        });

        Schema::table('beers', function (Blueprint $table) {
            //$table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            //$table->unsignedBigInteger('brewery_id');
            $table->foreign('brewery_id')->references('id')->on('breweries');
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
