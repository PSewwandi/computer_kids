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
 
/*simple course pages*/
Route::get('/simple','simpleController@index')->name('simple');
Route::get('/simple_questions/{id}','simpleController@question')->name("questionSimple");
Route::get('/successSimple','simpleController@success')->name("successSimple");
Route::get('/errorSimple/{correct_answer}','simpleController@error')->name("errorSimple");

/*intermediate course pages*/
Route::get('/intermediate','intermediateController@index')->name('intermediate');
Route::get('/intermediate_questions/{id}','intermediateController@question')->name("questionIntermediate");
Route::get('/successIntermediate','intermediateController@success')->name("successIntermediate");
Route::get('/errorIntermediate/{correct_answer}','intermediateController@error')->name("errorIntermediate");


/*advance course pages*/
Route::get('/advance','advanceController@index')->name('advance');
Route::get('/advance_questions/{id}','advanceController@question')->name("questionAdvance");
Route::get('/successAdvance','advanceController@success')->name("successAdvance");
Route::get('/errorAdvance/{correct_answer}','advanceController@error')->name("errorAdvance");

