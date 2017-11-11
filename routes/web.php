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

Route::get('/','HomeController@index')->name('home.index');
Route::get('/register','AccountController@index')->name('account.index');
Route::post('/register','AccountController@store')->name('account.store');
Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@checkLogin')->name('login.Check');
Route::get('/showsongs/{id}','fileController@showsong')->name('file.showsong');

Route::group(['middleware' => ['SessionCheck']],function (){
    Route::get('/accounts/{id}', 'AccountController@show')->name('account.show');
    Route::get('/update/{id}', 'AccountController@edit')->name('account.edit');
    Route::post('/update/{id}', 'AccountController@update')->name('account.update');
    Route::get('/logout','LoginController@destroy')->name('login.destroy');
    Route::get('/upload','fileController@index')->name('file.index');
    Route::post('/upload','fileController@store')->name('file.index');
    Route::get('/usersong/{id}','fileController@show')->name('file.show');

});

