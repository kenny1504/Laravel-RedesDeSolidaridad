<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Nota');
            $table->unsignedInteger('DetalleNotaid');
            $table->foreign('DetalleNotaid','Fk_notas_DetalleNotas')->references('id')->on('DetalleNotas')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('DetalleMatriculaid');
            $table->foreign('DetalleMatriculaid','Fk_notas_DetalleMatriculas')->references('id')->on('DetalleMatriculas')->onUpdate('restrict')->onDelete('restrict'); 
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
