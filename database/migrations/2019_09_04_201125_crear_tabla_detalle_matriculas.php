<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetalleMatriculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleMatriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Asignaturaid');
            $table->foreign('Asignaturaid','Fk_detalleMatriculas_asignaturas')->references('id')->on('asignaturas')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Matriculaid');
            $table->foreign('Matriculaid','Fk_detalleMatriculas_matriculas')->references('id')->on('Matriculas')->onUpdate('restrict')->onDelete('restrict'); 
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleMatriculas');
    }
}
