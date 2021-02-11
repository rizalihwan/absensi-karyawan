<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::resource('karyawan', 'KaryawanController');
    Route::get('/direktur', 'DirekturController@index')->name('direktur.index');
    Route::get('/direktur/laporan', 'DirekturController@cetak_laporan')->name('direktur.laporan');
});
