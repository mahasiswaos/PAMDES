<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
//get mengambil data
//post menyimpan data


Route::get('/menu', 'App\\Controllers\\MenuController@index');

Route::get('/golongan/add', 'App\\Controllers\\GolonganController@golonganAdd');
Route::get('/golongan/view', 'App\\Controllers\\GolonganController@golonganView');
Route::post('/golongan/proses_Add', 'App\\Controllers\\GolonganController@prosesAdd');
Route::get('/golongan/edit/{id}', 'App\\Controllers\\GolonganController@golonganEdit');
Route::get('/golongan/delete/{id}', 'App\\Controllers\\GolonganController@golonganDelete');
Route::post('/golongan/update/{id}', 'App\\Controllers\\GolonganController@ProsesUpdate');

Route::get('/pelanggan/add', 'App\\Controllers\\PelangganController@pelangganAdd');
Route::get('/pelanggan/view', 'App\\Controllers\\PelangganController@pelangganView');
Route::post('/pelanggan/proses_Add', 'App\\Controllers\\PelangganController@prosesAdd');
Route::get('/pelanggan/delete/{id}', 'App\\Controllers\\PelangganController@pelangganDelete');
Route::get('/pelanggan/edit/{id}', 'App\\Controllers\\PelangganController@pelangganEdit');
Route::post('/pelanggan/update/{id}', 'App\\Controllers\\PelangganController@ProsesUpdate');

Route::get('/tagihan/view', 'App\\Controllers\\TagihanController@tagihanView');
Route::get('/tagihan/add', 'App\\Controllers\\TagihanController@tagihanAdd');
Route::post('/tagihan/proses_add', 'App\\Controllers\\TagihanController@prosesAdd');
Route::get('/tagihan/edit/{id}', 'App\\Controllers\\TagihanController@tagihanEdit');
Route::post('/tagihan/update/{id}', 'App\\Controllers\\TagihanController@prosesUpdate');
Route::get('/tagihan/delete/{id}', 'App\\Controllers\\TagihanController@tagihanDelete');


