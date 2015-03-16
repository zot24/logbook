<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->dateTime('start_time');
            $table->dateTime('stop_time');
            $table->string('pilot_in_command')->nullable();
            $table->string('aircraft')->nullable();
            $table->string('aircraft_registration')->nullable();
            $table->string('aircraft_engine_type')->nullable();
            $table->string('departure_airport')->nullable();
            $table->string('arrive_airport')->nullable();
            $table->integer('num_landings');
            $table->integer('num_dec_landings');
            $table->integer('num_instrumental_approach');
            $table->integer('cross_country');
            $table->integer('night_hours');
            $table->integer('instrumental_hours');

            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('records');
    }
}
