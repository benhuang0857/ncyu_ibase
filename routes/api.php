<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('alert', 'TEA\\AlertController@post');
Route::post('data', 'TEA\\DataController@post');
Route::post('status', 'TEA\\StatusController@post');
Route::post('postBerry', 'StrawberryController@post');

Route::get('getAlert', 'TEA\\AlertController@getAlert');
Route::get('getData', 'TEA\\DataController@getData');
Route::get('getStatus', 'TEA\\StatusController@getStatus');
Route::get('getTemp', 'TEA\\StatusController@getTemp');
Route::get('getBerry', 'StrawberryController@getTemp');
Route::get('getBerryConductance', 'StrawberryController@getConductance');