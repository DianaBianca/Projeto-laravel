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
    return view('home');
});

Route::get('/cadfunc', function () {
    return view('cadfuncionario');
});

Route::get('/cadcli', function () {
    return view('cadcliente');
});

Route::get('/cadpet', function () {
    return view('cadpet');
});

Route::get('/cadfor', function () {
    return view('cadfornecedor');
});