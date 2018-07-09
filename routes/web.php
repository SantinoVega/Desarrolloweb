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

Route::get('/', function () {
    return "Home";
//view('welcome')
});


Route::get('/usuarios','ControladorUsuario@usuarios');


/* Expresiones regualeres \d+*/
Route::get('usuarios/{id}','ControladorUsuario@id')
	->where('id','\d+');


Route::get('usuarios/nuevo','ControladorUsuario@nuevo');



Route::get('usuarios/{name}/{nickname?}','Saludo');