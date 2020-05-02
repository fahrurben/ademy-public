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

Route::domain('{subdomain}.local.ademy.com')->middleware('subdomain')->group(function () {
    Route::get('/login', 'AuthenticationController@login')->name('login');
    Route::post('/login', 'AuthenticationController@login')->name('login');

    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/', 'HomeController@index')->name('home');

    Route::get('/fakultas', 'Institusi\FakultasController@index')->name('fakultas');
    Route::get('/fakultas/create', 'Institusi\FakultasController@create')->name('fakultas.create');
    Route::post('/fakultas/create', 'Institusi\FakultasController@create')->name('fakultas.create');
});