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

Route::get('/dosen/presensi', function () {
    return view('dosen/presensi');
});
Route::get('/dosen/feedback', function () {
    return view('dosen/feedback');
});



// Route::group(['middleware' => 'admin'], function(){

    // admin collections
    Route::prefix('/admin')->group(function(){
        Route::get('/', 'AdminController@home');

        Route::get('asprak','AdminController@index_asprak')->name('asprak.index');
        Route::get('asprak/create','AdminController@create_asprak')->name('asprak.create');
        Route::post('asprak/store','AdminController@store_asprak')->name('asprak.store');
        Route::put('asprak/{asprak}','AdminController@update_asprak')->name('asprak.update');
        Route::get('asprak/{id}','AdminController@show_asprak')->name('asprak.show');
        Route::get('asprak/{id}/delete','AdminController@delete_asprak')->name('asprak.destroy');
        Route::get('asprak/{id}/edit','AdminController@edit_asprak')->name('asprak.edit');

        //matkul

         Route::get('matkul','MatkulController@index_matkul')-> name('index.matkul');
        Route::get('matkul/create','MatkulController@create_matkul')->name('create.matkul');
        Route::post('matkul/store','MatkulController@store_matkul')->name('store.matkul');
        Route::put('matkul/{matkul}','MatkulController@update_matkul')->name('update.matkul');
        Route::get('matkul/{id}','MatkulController@show_matkul')->name('show.matkul');
        Route::get('matkul/{id}/delete','MatkulController@delete_matkul')->name('delete.matkul');
        Route::get('matkul/{id}/edit','MatkulController@edit_matkul')->name('edit.matkul');

    });
// });




// Route::group(['middleware' => 'praktikan'], function(){

    // praktikan collections
    Route::prefix('praktikan')->group(function(){
        Route::get('/', 'PraktikanController@index');
        Route::post('join-praktikum','PraktikanController@join_praktikum');
        Route::get('jadwal/{id_praktikum}','PraktikanController@index_jadwal');
        Route::POST('store_feedback','PraktikanController@store_feedback');
    });

    Route::get('/praktikan/profile', function () {
        return view('praktikan/profile');
    });
    Route::get('/praktikan/feedback', function () {
        return view('praktikan/feedback');
    });
// });

// asisten collections 
// Route::group(['middleware' => 'asprak'],function(){

    Route::prefix('asprak')->group(function(){
        Route::get('/', 'AsprakController@index');
        Route::get('/praktikum/{id}', 'AsprakController@index_jadwal');
        Route::post('/praktikum/create', 'AsprakController@create_praktikum')->name('create.praktikum');
        Route::post('/praktikum/jadwal', 'AsprakController@store_jadwal')->name('store.jadwal');
        Route::delete('/praktikum/jadwal/{id}', 'AsprakController@delete_jadwal')->name('delete.jadwal');
        Route::get('/praktikum/jadwal/{id}/edit', 'AsprakController@edit_jadwal')->name('edit.jadwal');
        Route::put('/praktikum/jadwal/{id}/update', 'AsprakController@update_jadwal')->name('update.jadwal');
        Route::get('/{id}/presensi','AsprakController@index_presensi');
        Route::get('check-presensi','AsprakController@check_presensi');
        Route::get('reset-presensi','AsprakController@reset_presensi');
        Route::get('get_feedback/{praktikum_id}/{jadwal_id}','AsprakController@get_feedback');

        Route::get('profile', function () {
            return view('asprak/profile');
        });
        
    });
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');








