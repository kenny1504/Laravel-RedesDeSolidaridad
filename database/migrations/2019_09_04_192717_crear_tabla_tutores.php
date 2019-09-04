<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class CrearTablaTutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('personasid');
            $table->foreign('personasid','Fk_tutores_personas')->references('id')->on('personas')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Oficiosid');
            $table->foreign('Oficiosid','Fk_tutores_oficios')->references('id')->on('oficios')->onUpdate('restrict')->onDelete('restrict'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}
