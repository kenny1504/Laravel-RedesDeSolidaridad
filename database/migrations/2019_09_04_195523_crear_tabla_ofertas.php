<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOfertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // tabla ofertas con sus atributos y relaciones con demas tablas
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Descripcion',50);
            $table->date('FechaOferta');
            $table->unsignedInteger('Seccionid');
            $table->foreign('Seccionid','Fk_ofertas_secciones')->references('id')->on('secciones')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Gradoid');
            $table->foreign('Gradoid','Fk_ofertas_grados')->references('id')->on('grados')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Grupoid');
            $table->foreign('Grupoid','Fk_ofertas_grupos')->references('id')->on('grupos')->onUpdate('restrict')->onDelete('restrict'); 
            $table->unsignedInteger('Docenteid');
            $table->foreign('Docenteid','Fk_ofertas_docentes')->references('id')->on('docentes')->onUpdate('restrict')->onDelete('restrict'); 
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
