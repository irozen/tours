<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservas extends Migration
{
    /**
     *
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reservas', function (Blueprint $table) {
          $table->increments('id', true);
          $table->integer('user_id')->unsigned();
          $table->integer('tour_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('tour_id')->references('id')->on('tours');
          $table->date('date');
          $table->integer('resNum');
          $table->string('pickUp');
          $table->string('dropOff');
          $table->string('guide');
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
        Schema::dropIfExists('reservas');
    }
}
