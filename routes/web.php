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
Route::name('root_path')->get('', 'HomeController@index');

Route::get('/{page}', 'PageController@home');
Route::post('/redaction', 'PageController@store');
