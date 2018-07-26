<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crime_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('crimeType');
            $table->string('image');
            $table->string('occupation');
            $table->string('contact');
            $table->string('address');
            $table->string('gender',1);

            $table->string('license');
            $table->string('make');
            $table->string('model');
            $table->string('insurance');
            $table->string('engine');
            $table->string('chasis');
            $table->string('engine_size');
            $table->string('transimission');
            $table->string('fuel');
            $table->string('deleted',200);
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
        Schema::dropIfExists('crime_types');
    }
}
