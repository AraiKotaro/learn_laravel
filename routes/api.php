<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('attendances', 'Api\AttendancesController')
    ->only(['index', 'show', 'store']);
Route::put('attendances/{attendance}/report',
    'Api\ReportAttendancesController@update');

Route::resource('todo2s', 'Api\Todo2sController')
    ->only(['index', 'show', 'store']);
Route::put('todo2s/{todo2}/done', 'Api\DoneTodo2sController@update');
