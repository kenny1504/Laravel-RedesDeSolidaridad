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
Route::post('Materia/editar','materiacontroller@editar')->name ('Editar_materia');

//Rutas Oficios
Route::post('Oficio/crear','oficiocontroller@guardar')->name ('guardar_oficio');
Route::get('Oficio/index','oficiocontroller@index')->name ('Mostrar_oficio');
Route::post('Oficio/eliminar','oficiocontroller@eliminar')->name ('Eliminar_oficio');
Route::post('Oficio/editar','oficiocontroller@editar')->name ('Editar_oficio');

//Rutas Parentescos
Route::post('Parentesco/crear','parentescocontroller@guardar')->name ('guardar_parentesco');
Route::get('Parentesco/index','parentescocontroller@index')->name ('Mostrar_parentesco');
Route::post('Parentesco/eliminar','parentescocontroller@eliminar')->name ('Eliminar_parentesco');
Route::post('Parentesco/editar','parentescocontroller@editar')->name ('Editar_parentesco');