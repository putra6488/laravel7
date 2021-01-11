<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     return view('welcome');
// });




Route::post('/', 'autentikasi\AuthC@login')->name('login');
Route::get('/', 'autentikasi\AuthC@index')->name('login');


Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/dashboard', function () {
        return view('index');
    });
    
    // elektronik
    Route::get('/elektronik', 'ElektronikC@index')->name('elektro');
    Route::get('/elektronik/tambah', 'ElektronikC@tambah')->name('elektro.t');
    Route::post('/elektronik', 'ElektronikC@simpan')->name('elektro.s');
    Route::delete('/elektronik/{id}', 'ElektronikC@delete')->name('elektro.d');
    Route::get('/elektronik/{id}/edit', 'ElektronikC@edit')->name('elektro.e');
    Route::patch('/elektronik/{id}', 'ElektronikC@update')->name('elektro.u');
    // pertambangan
    Route::get('/pertambangan', 'PertambanganC@index')->name('tambang');
    Route::get('/pertambangan/tambah', 'PertambanganC@tambah')->name('tambang.t');
    Route::post('/pertambangan', 'PertambanganC@simpan')->name('tambang.s');
    Route::delete('/pertambangan/{id}', 'PertambanganC@delete')->name('tambang.d');
    Route::get('/pertambangan/{id}/edit', 'PertambanganC@edit')->name('tambang.e');
    Route::patch('/pertambangan/{id}', 'PertambanganC@update')->name('tambang.u');

    //logout
    Route::get('/logout', 'autentikasi\AuthC@logout')->name('logout');
});