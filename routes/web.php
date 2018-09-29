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
    return view('asisten/dashboard');
});

Route::get('/asisten', function () {
    return view('asisten/home');
});
Route::get('/asisten/profile', function () {
    return view('asisten/profile');
});
