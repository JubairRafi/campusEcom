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

Route::get('/','homeController@index');//->name('home.index');
Route::get('/login','loginController@index');
Route::get('/admin','adminController@index');

Route::get('/register','registerController@index')->name('register');