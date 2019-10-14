<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oficios extends Model //Modelo oficios
{ 
    // Modelo o clase que conecta con los controladores
    protected $table    = "oficios";
    protected $fillable  = ['Nombre'];
    protected $guarded = ['id'];
    public $timestamps  =false;
    
}