<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrawberryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strawberry', function (Blueprint $table) {
            $table->id();
            $table->string('humidity')->default("NO");
            $table->string('temperature')->default("NO");
            $table->string('sunshine')->default("NO");
            $table->string('conductance')->default("NO");
            $table->string('acid')->default("NO");
            $table->string('environment')->default("NO");
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
        Schema::dropIfExists('strawberry');
    }
}
