<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('gimnasios','inicioController@gimnasios');

Route::get('/logout', 'Auth\LoginController@logout');
Route::post('subir_imagen_usuario','gymController@actualizarFoto');
Route::resource('/','inicioController');
Route::resource('login','loginController');
Route::resource('admin','adminController');
Route::resource('gimnasio','gymController');



