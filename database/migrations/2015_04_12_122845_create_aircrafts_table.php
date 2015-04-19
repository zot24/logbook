<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAircraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircrafts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->integer('weight');
            $table->integer('capacity');
            $table->string('engine_type');
            $table->string('manufacturer');
            $table->string('registration_number');
            $table->timestamps();

            /*
             * User params
             */
            $table->integer('user_id')->unsigned();

            /*
             * User foreign key
             */
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
        Schema::drop('aircrafts');
    }
}
