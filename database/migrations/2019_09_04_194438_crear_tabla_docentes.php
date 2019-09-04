<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDocentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('personasid');
            $table->foreign('personasid','Fk_docentes_personas')->references('id')->on('personas')->onUpdate('restrict')->onDelete('restrict'); 
            $table->boolean('Estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
