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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('todo', 'TodoController@index');
Route::post('todo', 'TodoController@edit');
Route::post('delete', 'TodoController@delete');

Route::get('attends', 'AttendancesController@index')->name('home');
Route::get('attend', 'AttendancesController@create')->name('attend');

Route::get('todo2s', 'Todo2sController@index')->name('todo2_home');
Route::get('todo2s_create', 'Todo2sController@create')->name('todo2_create');

Route::get('/', function() { return view('top/index'); });
