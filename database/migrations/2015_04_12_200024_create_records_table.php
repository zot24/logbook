<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');

            /*
             * User params
             */
            $table->integer('user_id')->unsigned();

            /*
             * Aircraft params
             */
            $table->integer('aircraft_id')->unsigned()->nullable();

            /*
             * Airport params
             */
            $table->integer('arrive_airport_id')->unsigned()->nullable();
            $table->integer('departure_airport_id')->unsigned()->nullable();

            /*
             * Other params
             */
            $table->dateTime('stop_time');
            $table->dateTime('start_time');
            $table->integer('night_hours');
            $table->integer('num_landings');
            $table->integer('cross_country');
            $table->integer('num_dec_landings');
            $table->integer('instrumental_hours');
            $table->integer('num_instrumental_approach');
            $table->timestamps();

            /*
             * User foreign key
             */
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            /*
             * Aircraft foreign key
             */
            $table->foreign('aircraft_id')
                ->references('id')
                ->on('aircrafts')
                ->onDelete('cascade');

            /*
             * Airport foreign key
             */
            $table->foreign('arrive_airport_id')
                ->references('id')
                ->on('airports')
                ->onDelete('cascade');

            /*
             * Airport foreign key
             */
            $table->foreign('departure_airport_id')
                ->references('id')
                ->on('airports')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('records');
    }
}
