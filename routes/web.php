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
Route::get('/dosen/presensi', function () {
    return view('dosen/presensi');
});
Route::get('/dosen/feedback', function () {
    return view('dosen/feedback');
});



// admin collections
Route::prefix('admin')->group(function(){
    Route::get('asprak','AdminController@index_asprak')->name('asprak.index');
    Route::get('asprak/create','AdminController@create_asprak')->name('asprak.create');
    Route::put('asprak/{asprak}','AdminController@update_asprak')->name('asprak.update');
    Route::get('asprak/{asprak}','AdminController@show_asprak')->name('asprak.show');
    Route::delete('asprak/{asprak}','AdminController@delete_asprak')->name('asprak.destroy');
    Route::delete('asprak/{asprak}/edit','AdminController@edit_asprak')->name('asprak.edit');
});




// praktikan collections



// asisten collections = dosen
