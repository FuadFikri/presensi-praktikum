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
// sebelum login
Route::get('/', function () {
    return view('welcome');
});



// dosen collections
Route::get('/dosen', function () {
    return view('dosen/home');
});
Route::get('/dosen/praktikum/id', function() {
    return view('dosen/praktikum');
});
Route::get('/dosen/profile', function () {
    return view('dosen/profile');
});



// admin collections





// praktikan collections



// asisten collections = dosen
