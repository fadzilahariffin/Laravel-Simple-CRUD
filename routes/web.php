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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('', 'CRUDController@index')->name('home.index');
Route::get('create', 'CRUDController@create')->name('home.create');
Route::post('store', 'CRUDController@store')->name('home.save');
Route::get('edit/{id}', 'CRUDController@edit')->name('home.edit');
Route::patch('update/{id}', 'CRUDController@update')->name('home.update');
Route::get('show/{id}','CRUDController@show')->name('home.show');
Route::get('delete/{id}','CRUDController@destroy')->name('home.destroy');