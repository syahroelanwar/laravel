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

Route::get('/', 'MahasiswaController@index')->name('home');
Route::get('/create', 'MahasiswaController@create')->name('create');
Route::post('/create', 'MahasiswaController@store')->name('store');
Route::get('/edit/{id}', 'MahasiswaController@edit')->name('edit');
Route::post('/update/{id}', 'MahasiswaController@update')->name('update');
Route::delete('/delete/{id}', 'MahasiswaController@delete')->name('delete');




Route::get('/test', 'TestController@index');

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/user/{id}', function ($id) {
    return "Your Id is ".$id;
});