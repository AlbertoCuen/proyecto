<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdfProyectos/{id}', 'ejemploController@pdfProyectos');

Route::post('/actualizarUsuariosProyectos/{id}', 'ejemploController@actualizarUsuariosProyectos');

Route::post('/seleccionarUsuarios', 'ejemploController@seleccionarUsuarios');

Route::get('/asignarUsuarios', 'ejemploController@asignarUsuarios');

Route::post('actualizarUsuario/{id}', 'ejemploController@actualizarUsuario');

Route::get('modificarUsuario/{id}', 'ejemploController@modificarUsuario');

Route::post('guardarUsuario', 'ejemploController@guardarUsuario');

Route::get('/registrarUsuario', 'ejemploController@registrarUsuario');

Route::get('/eliminarUsuario/{id}', 'ejemploController@eliminarUsuario');

Route::get('/usuarios', 'ejemploController@mostrarUsuarios');

Route::get('/home/{nombre}/{edad}', 'ejemploController@index');
