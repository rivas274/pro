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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bancos', 'BancosController@index')->name('bancos');

Route::get('/bancos/create', 'BancosController@create')->name('bancosCreate');

Route::post('/bancos', 'BancosController@store')->name('bancoStore');

Route::get('/bancos/{banco}', 'BancosController@show')->name('bancoShow');

Route::get('/bancos/{banco}/edit', 'BancosController@edit')->name('bancoEdit');

Route::put('/bancos/{banco}', 'BancosController@update')->name('bancoUpdate');

Route::delete('/bancos/{banco}', 'BancosController@delete')->name('bancoDelete');
