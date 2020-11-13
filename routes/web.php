<?php

use Illuminate\Support\Facades\Route;

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
    return view('info');
});

Route::get('/map', function () {
    return view('index_map');
});

Route::get('/logo', function () {
    return view('index_logo');
});

Route::get('/farm', function () {
    return view('farm');
});

Route::get('/berry', function () {
    return view('strawberry');
});

Route::get('/greenhouse', function () {
    return view('greenhouse');
});

Route::get('/tea', function () {
    return view('tea');
});