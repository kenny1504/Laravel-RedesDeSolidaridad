<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { // tabla Personas con sus atributos
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Cedula',50);
            $table->string('Nombre',50);
            $table->string('Apellido1',50);
            $table->string('Apellido2',50);
            $table->string('Sexo',1);
            $table->string('Direccion',50);
            $table->string('Correo',50);
            $table->unsignedInteger('Telefono');
            $table->date('FechaNacimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
