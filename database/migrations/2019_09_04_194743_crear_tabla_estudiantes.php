<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('personasid');
            $table->foreign('personasid','Fk_estudiantes_personas')->references('id')->on('personas')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('CodigoEstudiante');
            $table->unsignedInteger('parentescoid');
            $table->foreign('parentescoid','Fk_estudiantes_parentescos')->references('id')->on('parentescos')->onUpdate('restrict')->onDelete('restrict');
            $table->unsignedInteger('tutorid');
            $table->foreign('tutorid','Fk_estudiantes_tutores')->references('id')->on('tutores')->onUpdate('restrict')->onDelete('restrict');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
