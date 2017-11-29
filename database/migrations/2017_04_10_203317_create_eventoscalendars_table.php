<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoscalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventoscalendars', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('titulo')->nullable();
            $table->datetime('fechaInicio');
            $table->datetime('fechaFinal');
            //$table->boolean('dia')->nullable();
            $table->string('color');
            
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
        Schema::dropIfExists('eventoscalendars');
    }
}
