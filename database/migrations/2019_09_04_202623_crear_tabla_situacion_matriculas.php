<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaSituacionMatriculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // tabla situacion matricula,  aqui se registra si es repitente,reingreso o nuevo ingreso
        Schema::create('situacionMatriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Descripcion',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('situacionMatriculas');
    }
}
