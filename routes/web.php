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

Route::get('/admin', 'AdminController@admin');
/* Route Tabel siswa*/
Route::get('/admin/siswa', 'SiswaController@index');
Route::get('/admin/siswa/tambah', 'SiswaController@create');
Route::post('/admin/siswa', 'SiswaController@store');
Route::get('/admin/siswa/{id}/detail', 'SiswaController@detail');
Route::get('/admin/siswa/{id}/ubah', 'SiswaController@ubah');
Route::put('/admin/siswa/{id}', 'SiswaController@update');
Route::delete('/admin/siswa/{id}', 'SiswaController@delete');
/* Route Tabel Admin*/
Route::get('/admin/kelas', 'KelasController@index');
Route::get('/admin/kelas/tambah', 'KelasController@create');
Route::post('/admin/kelas', 'KelasController@store');
Route::get('/admin/kelas/{id}/detail', 'KelasController@detail');
Route::get('/admin/kelas/{id}/ubah', 'KelasController@ubah');
Route::put('/admin/kelas/{id}', 'KelasController@update');
Route::delete('/admin/kelas/{id}', 'KelasController@delete');
/*Route Login */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
