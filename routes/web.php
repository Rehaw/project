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

Route::get('/home', 'HomeController@index');
Route::post('/home/subscribe', 'HomeController@postSubscribe');
Route::get('/', 'BaseController@getIndex');
Route::get('/catalogs', 'TovarsController@getCatalogs');
Route::get('/catalog/{id}', 'TovarsController@getCatalog');
Route::get('/{id}', 'TovarsController@getIndex');
