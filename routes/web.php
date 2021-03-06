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

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::post('/', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/lookup/kota', 'Common\LookupController@getAllKota')->name('getAllKota')->middleware('auth');

Route::group(['middleware' => ['can:manage-universitas']], function () {

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

    Route::get('/dosen', 'Institusi\DosenController@index')->name('dosen');
    Route::get('/dosen/create', 'Institusi\DosenController@create')->name('dosen.create');
    Route::post('/dosen/create', 'Institusi\DosenController@create')->name('dosen.create');
    Route::get('/dosen/update/{id}', 'Institusi\DosenController@update')->name('dosen.update');
    Route::post('/dosen/update/{id}', 'Institusi\DosenController@update')->name('dosen.update');
    Route::get('/dosen/view/{id}', 'Institusi\DosenController@view')->name('dosen.view');
    Route::get('/dosen/delete/{id}', 'Institusi\DosenController@delete')->name('dosen.delete');

    Route::get('/matakuliah', 'Institusi\MataKuliahController@index')->name('matakuliah');
    Route::get('/matakuliah/create', 'Institusi\MataKuliahController@create')->name('matakuliah.create');
    Route::post('/matakuliah/create', 'Institusi\MataKuliahController@create')->name('matakuliah.create');
    Route::get('/matakuliah/update/{id}', 'Institusi\MataKuliahController@update')->name('matakuliah.update');
    Route::post('/matakuliah/update/{id}', 'Institusi\MataKuliahController@update')->name('matakuliah.update');
    Route::get('/matakuliah/view/{id}', 'Institusi\MataKuliahController@view')->name('matakuliah.view');
    Route::get('/matakuliah/delete/{id}', 'Institusi\MataKuliahController@delete')->name('matakuliah.delete');

    Route::get('/kelasta/{id}', 'TahunAjaran\KelasTAController@index')->name('kelasta');
    Route::get('/kelasta/create/{id}', 'TahunAjaran\KelasTAController@create')->name('kelasta.create');
    Route::post('/kelasta/create/{id}', 'TahunAjaran\KelasTAController@create')->name('kelasta.create');
    Route::get('/kelasta/update/{id}', 'TahunAjaran\KelasTAController@update')->name('kelasta.update');
    Route::post('/kelasta/update/{id}', 'TahunAjaran\KelasTAController@update')->name('kelasta.update');
    Route::get('/kelasta/view/{id}', 'TahunAjaran\KelasTAController@view')->name('kelasta.view');
    Route::get('/kelasta/delete/{id}', 'TahunAjaran\KelasTAController@delete')->name('kelasta.delete');
});

Route::group(['middleware' => ['can:manage-mahasiswa']], function () {

    Route::get('/mahasiswa', 'Mahasiswa\MahasiswaController@index')->name('mahasiswa');
    Route::get('/mahasiswa/create', 'Mahasiswa\MahasiswaController@create')->name('mahasiswa.create');
    Route::post('/mahasiswa/create', 'Mahasiswa\MahasiswaController@create')->name('mahasiswa.create');
    Route::get('/mahasiswa/update/{id}', 'Mahasiswa\MahasiswaController@update')->name('mahasiswa.update');
    Route::post('/mahasiswa/update/{id}', 'Mahasiswa\MahasiswaController@update')->name('mahasiswa.update');
    Route::get('/mahasiswa/view/{id}', 'Mahasiswa\MahasiswaController@view')->name('mahasiswa.view');
    Route::get('/mahasiswa/delete/{id}', 'Mahasiswa\MahasiswaController@delete')->name('mahasiswa.delete');
    Route::get('/mahasiswa/update-alamat/{id}', 'Mahasiswa\MahasiswaController@updateAlamat')->name('mahasiswa.updateAlamat');
    Route::post('/mahasiswa/update-alamat/{id}', 'Mahasiswa\MahasiswaController@updateAlamat')->name('mahasiswa.updateAlamat');
});