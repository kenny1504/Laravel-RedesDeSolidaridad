<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parentescos extends Model //Modelo parentescos
{ 
    // Modelo o clase que conecta con los controladores
    protected $table    = "parentescos";
    protected $fillable  = ['Parentesco'];
    protected $guarded = ['id'];
    public $timestamps  =false;
    
}