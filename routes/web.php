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

Route::get('/', 'HobbyController@index');

Route::resource('hobby', 'HobbyController');

Route::get('SOME_PATH/{user_id}', 'TestController@testFunction');