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
Route::post('postFarm', 'FarmController@post');
Route::post('postGreenhouse', 'GreenhouseController@post');

Route::get('getAlert', 'TEA\\AlertController@getAlert');
Route::get('getData', 'TEA\\DataController@getData');
Route::get('getStatus', 'TEA\\StatusController@getStatus');
Route::get('getWeight', 'TEA\\StatusController@getWeight');
Route::get('getMachineStatus', 'TEA\\StatusController@getMachineStatus');
Route::get('getTexture', 'TEA\\StatusController@getTexture');
Route::get('getTemp', 'TEA\\StatusController@getTemp');
Route::get('getBerry', 'StrawberryController@getTemp');
Route::get('getBerryPH', 'StrawberryController@getBerryPH');
Route::get('getBerrySunshine', 'StrawberryController@getSunshine');
Route::get('getFarm', 'FarmController@getOne');
Route::get('getGreenhouse', 'GreenhouseController@getOne');
