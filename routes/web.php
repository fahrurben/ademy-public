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

Route::get('/login', 'AuthenticationController@login')->name('login');
Route::post('/login', 'AuthenticationController@login')->name('login');
Route::get('/logout', 'AuthenticationController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@index')->name('home');

Route::get('/fakultas', 'Institusi\FakultasController@index')->name('fakultas');
Route::get('/fakultas/create', 'Institusi\FakultasController@create')->name('fakultas.create');
Route::post('/fakultas/create', 'Institusi\FakultasController@create')->name('fakultas.create');
Route::get('/fakultas/update/{id}', 'Institusi\FakultasController@update')->name('fakultas.update');
Route::post('/fakultas/update/{id}', 'Institusi\FakultasController@update')->name('fakultas.update');
Route::get('/fakultas/delete/{id}', 'Institusi\FakultasController@delete')->name('fakultas.delete');
Route::get('/fakultas/view/{id}', 'Institusi\FakultasController@view')->name('fakultas.view');
Route::post('/fakultas/view/{id}', 'Institusi\FakultasController@view')->name('fakultas.view');

Route::get('/prodi', 'Institusi\ProdiController@index')->name('prodi');
Route::get('/prodi/create', 'Institusi\ProdiController@create')->name('prodi.create');
Route::post('/prodi/create', 'Institusi\ProdiController@create')->name('prodi.create');
Route::get('/prodi/update/{id}', 'Institusi\ProdiController@update')->name('prodi.update');
Route::post('/prodi/update/{id}', 'Institusi\ProdiController@update')->name('prodi.update');
Route::get('/prodi/delete/{id}', 'Institusi\ProdiController@delete')->name('prodi.delete');
Route::get('/prodi/view/{id}', 'Institusi\ProdiController@view')->name('prodi.view');
Route::post('/prodi/view/{id}', 'Institusi\ProdiController@view')->name('prodi.view');

Route::get('/tahunajaran', 'Institusi\TahunAjaranController@index')->name('tahunajaran');
Route::get('/tahunajaran/create', 'Institusi\TahunAjaranController@create')->name('tahunajaran.create');
Route::post('/tahunajaran/create', 'Institusi\TahunAjaranController@create')->name('tahunajaran.create');
Route::get('/tahunajaran/update/{id}', 'Institusi\TahunAjaranController@update')->name('tahunajaran.update');
Route::post('/tahunajaran/update/{id}', 'Institusi\TahunAjaranController@update')->name('tahunajaran.update');
Route::get('/tahunajaran/delete/{id}', 'Institusi\TahunAjaranController@delete')->name('tahunajaran.delete');
Route::get('/tahunajaran/view/{id}', 'Institusi\TahunAjaranController@view')->name('tahunajaran.view');

Route::get('/mahasiswa', 'Mahasiswa\MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/create', 'Mahasiswa\MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa/create', 'Mahasiswa\MahasiswaController@create')->name('mahasiswa.create');
Route::get('/mahasiswa/update/{id}', 'Mahasiswa\MahasiswaController@update')->name('mahasiswa.update');
Route::post('/mahasiswa/update/{id}', 'Mahasiswa\MahasiswaController@update')->name('mahasiswa.update');
Route::get('/mahasiswa/view/{id}', 'Mahasiswa\MahasiswaController@view')->name('mahasiswa.view');
Route::get('/mahasiswa/delete/{id}', 'Mahasiswa\MahasiswaController@delete')->name('mahasiswa.delete');

Route::get('/dosen', 'Institusi\DosenController@index')->name('dosen');