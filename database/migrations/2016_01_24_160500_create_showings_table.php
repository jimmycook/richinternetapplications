<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cinema_id')->unsigned();
            $table->foreign('cinema_id')->references('id')->on('cinemas');
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->dateTime('start_time');
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
        Schema::drop('showings');
    }
}
