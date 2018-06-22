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

Route::get('/', 'NicknameController@welcome');
Route::get('start', 'NicknameController@start')->name('start.get');
Route::get('index', 'NicknameController@index')->name('index.get');
Route::get('histroy', 'NicknameController@history')->name('history.get'); 
