<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Ruta INICIO
Route::get('/','iniciocontroller@index')->name ('inicio');

//Rutas Materia
Route::post('Materia/crear','materiacontroller@guardar')->name ('guardar_materia');
Route::get('Materia/index','materiacontroller@index')->name ('Mostrar_materia');
Route::post('Materia/eliminar','materiacontroller@eliminar')->name ('Eliminar_materia');




#Rutas Oficios
Route::post('T_Oficio/crear','oficiocontroller@guardar1')->name ('guardar_oficio');
Route::get('T_Oficio/index','oficiocontroller@index')->name ('Mostrar_oficio');
Route::post('Materia/editar','materiacontroller@editar')->name ('Editar_materia');
