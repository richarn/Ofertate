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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'InicioController@index');

Route::post('open/calzado', 'InicioController@open_calzado');

Route::get('calzado', 'CalzadosController@index');

Route::get('remera', 'RemerasController@index');

Route::get('producto', 'ProductoController@index');

Route::get('camisa', 'CamisasController@index');

Route::get('electro', 'ElectroController@index');
