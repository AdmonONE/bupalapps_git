<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informeods', function(Blueprint $table)
        {
            $table->string('codigo');
            $table->string('ods');
            $table->date('fechaperiodo');
            $table->integer('id_obligacion');
            $table->string('actividadesejecutadas');
            $table->integer('porcentajeavance');
            $table->date('fechaconstancia');
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
        Schema::dropIfExists('informeods');
    }
}
