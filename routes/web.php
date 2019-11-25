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
Route::get('about', 'AboutController@index');
Route::get('contact', 'AboutController@contact');
Route::get('team', 'AboutController@team');
Route::get('product', 'AboutController@product');
Route::get('service', 'AboutController@service');
Route::get('factory', 'AboutController@factory');