<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo 'se entrato nell\'area amministratore';
})->name('index');

Route::get('/dashboard', function () {
    echo 'se entrato nell\'area amministratore';
})->name('index');