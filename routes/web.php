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

// If you have multiple things in your controller method, use this
Route::get('/about', 'HelloController@about');
Route::get('/services', 'HelloController@services');
// Use this as a shortcut if you only have one thing with the same name
// Route::view('/about', 'about');
// Route::view('/services', 'services');
