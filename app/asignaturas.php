<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignaturas extends Model //Modelo asignaturas
{ 
    // Modelo o clase que conecta con los controladores
    protected $table    = "asignaturas";
    protected $fillable  = ['Nombre'];
    protected $guarded = ['id'];
    public $timestamps  =false;
}
