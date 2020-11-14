<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGreenhouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greenhouse', function (Blueprint $table) {
            $table->id();
            $table->string("voltage")->default("0");
            $table->string("air_temperature")->default("0");
            $table->string("air_humidity")->default("0");
            $table->string("co2")->default("0");
            $table->string("sunshine")->default("0");
            $table->string("soil_temperature")->default("0");
            $table->string("soil_humidity")->default("0");
            $table->string("air_pressure")->default("0");
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
        Schema::dropIfExists('greenhouse');
    }
}
