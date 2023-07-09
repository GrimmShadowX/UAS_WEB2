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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/create', 'MahasiswaController@create');
Route::post('/mahasiswa', 'MahasiswaController@store');
Route::get('mahasiswa/{id}/edit', 'MahasiswaController@edit'); 
Route::patch('mahasiswa/{id}', 'MahasiswaController@update');
Route::delete('mahasiswa/{id}', 'MahasiswaController@destroy');
Route::get('/mahasiswa/search','MahasiswaController@search')->name('search');

Route::get('/buku', 'BukuController@index');
Route::get('/buku/create', 'BukuController@create');
Route::post('/buku', 'BukuController@store');
Route::get('buku/{id}/edit', 'BukuController@edit'); 
Route::patch('buku/{id}', 'BukuController@update');
Route::delete('buku/{id}', 'BukuController@destroy');
Route::get('/buku/search','BukuController@search')->name('search');