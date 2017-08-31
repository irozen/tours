<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tours extends Migration
{
    /**
     *
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tours', function (Blueprint $table) {
          $table->increments('id', true);
          $table->string('name');
          $table->string('description');
          $table->double('price');
          $table->integer('categorias_id')->unsigned();
          $table->foreign('categorias_id')->references('id')->on('categorias');
          $table->string('photo');
          $table->integer('duration');
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
        Schema::dropIfExists('tours');
    }
}
