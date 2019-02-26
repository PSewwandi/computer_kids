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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simple','simpleController@index')->name('simple');
Route::get('/simple_questions/{id}','simpleController@question')->name("question");
Route::get('/success','simpleController@success')->name("success");
Route::get('/error/{correct_answer}','simpleController@error')->name("error");
