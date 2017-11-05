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


Route::get('/register','AccountController@index')->name('account.index');
Route::post('/register','AccountController@store')->name('account.store');
Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@checkLogin')->name('login.Check');
Route::get('/','HomeController@index')->name('home.index');
Route::get('/accounts/{id}', 'AccountController@show')->name('account.show');
Route::get('/update/{id}', 'AccountController@edit')->name('account.edit');
Route::get('/logout','LoginController@destroy')->name('login.destroy');

