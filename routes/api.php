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

Route::get("parking/{lat}/{lng}/{radius}","ParkingController@index");
Route::post("user","UserController@store");
Route::post("login","UserController@login");
Route::get('suggest','SuggestController@index');
Route::post('suggest','SuggestController@store');
Route::get('suggest/data','SuggestController@suggestData');
Route::get("abc","ParkingController@abc");