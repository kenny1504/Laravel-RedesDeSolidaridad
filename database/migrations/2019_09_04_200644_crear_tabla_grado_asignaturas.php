<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaGradoAsignaturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradoAasignaturas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Gradoid');
            $table->foreign('Gradoid','Fk_gradoAasignatura_grados')->references('id')->on('grados')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Asignaturaid');
            $table->foreign('Asignaturaid','Fk_gradoAasignaturas_asignaturas')->references('id')->on('asignaturas')->onUpdate('restrict')->onDelete('restrict'); 
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gradoAasignaturas');
    }
}
