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

Route::resource('login','loginController');



Route::resource('admin','adminController');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('gimnasios','inicioController@gimnasios');
Route::get('contacto', 'inicioController@contact');
Route::resource('/','inicioController');

Route::post('subir_imagen_persona','personaController@actualizarFoto');

Route::resource('persona', 'personaController');

Route::post('registro/gym','gymController@guardarGym');
Route::resource('gimnasio','gymController');

Route::post('registro/atleta','atletaController@guardarAtleta');

Route::post('registro/super_admin','superAdminController@store');
Route::resource('sup&er','superAdminController');


Route::resource('user','userController');






