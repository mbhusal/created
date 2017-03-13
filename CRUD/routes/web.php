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

Route::get('index','testing@index');

Route::get('create','testing@create');

Route::post('store','testing@store');

Route::get('show/{id}','testing@show');

Route::get('edit/{id}','testing@edit');

Route::post('update/{id}','testing@update');

Route::get('destroy/{id}','testing@destroy');

