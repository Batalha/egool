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

Route::get('/', 'EgoolController@index');
Route::get('futebol/socyte', 'PosicaoController@index');
Route::get('admin', 'InscricaoAdminController@index');
Route::get('admin/create', 'InscricaoAdminController@create');

//Route::get('')
