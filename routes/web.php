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
Route::prefix('/admin')->group(function(){
    Route::middleware('web')->group(function(){
        Route::get('/', function(){
            return view('admin.home');
        });
        Route::get('asprak','AdminController@index_asprak')->name('asprak.index');
        Route::get('asprak/create','AdminController@create_asprak')->name('asprak.create');
        Route::post('asprak/store','AdminController@store_asprak')->name('asprak.store');
        Route::put('asprak/{asprak}','AdminController@update_asprak')->name('asprak.update');
        Route::get('asprak/{id}','AdminController@show_asprak')->name('asprak.show');
        Route::get('asprak/{id}/delete','AdminController@delete_asprak')->name('asprak.destroy');
        Route::get('asprak/{id}/edit','AdminController@edit_asprak')->name('asprak.edit');

    });
});




// praktikan collections
Route::get('/praktikan', function () {
    return view('praktikan/home');
});

Route::get('/praktikan/profile', function () {
    return view('praktikan/profile');
});
Route::get('/praktikan/feedback', function () {
    return view('praktikan/feedback');
});



// asisten collections 
Route::prefix('asprak')->group(function(){
    Route::get('/', 'AsprakController@index');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ini login

Route::get('/login', function () {
    return view('login/login');
});
// ini register
Route::get('/register', function () {
    return view('login/register');
});
