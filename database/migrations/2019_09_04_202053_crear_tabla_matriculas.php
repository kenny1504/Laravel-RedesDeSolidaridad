<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMatriculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Fecha');
            $table->unsignedInteger('Ofertaid');
            $table->foreign('Ofertaid','Fk_matriculas_ofertas')->references('id')->on('ofertas')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Turnoid');
            $table->foreign('Turnoid','Fk_matriculas_turnos')->references('id')->on('turnos')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Turnoid');
            $table->foreign('Turnoid','Fk_matriculas_turnos')->references('id')->on('turnos')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('SituacionMatriculaid');
            $table->foreign('SituacionMatriculaid','Fk_matriculas_situacionMatriculas')->references('id')->on('situacionMatriculas')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Estudianteid');
            $table->foreign('Estudianteid','Fk_matriculas_estudiantes')->references('id')->on('estudiantes')->onUpdate('restrict')->onDelete('restrict'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
