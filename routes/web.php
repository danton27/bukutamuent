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

Route::get('/', 'Master@index')->middleware('auth')->name('home');

Route::get('/form/create', 'Master@create');
Route::post('/','Master@store');

Route::get('/form/{id}','Master@show');
Route::get('/form/{id}/edit', 'Master@edit');
Route::put('/form/{id}','Master@update');

// search
Route::get('/search', 'Master@search')->name('search');

Route::delete('/form/{id}', "Master@deleted");
//Route::get('/home', function(){
//    return 'HOME';
//})->name('home');
Route::get('/register', 'AuthController@getRegister')->middleware('guest');
Route::post('/register','AuthController@postRegister')->name('register')->middleware('guest');
Route::get('/login','AuthController@getLogin')->name('login')->middleware('guest');
Route::post('/login','AuthController@postLogin')->middleware('guest');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');
