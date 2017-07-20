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


Route::get('/','ScasController@index');
Route::get('admin','ScasController@admin');
Route::resource('Usuario','UsuarioController');
Route::resource('log','logController');
Route::get('logout','logController@logout');
Route::resource('accesos','AccesoController');


