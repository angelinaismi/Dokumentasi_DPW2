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

Route::get('login', function () {
    return view('login');
});

Route::get('product', function () {
    return view('product');
});

Route::get('register', function () {
    return view('register');
});

Route::get('template', function () {
    return view('template2.base');
});

Route::get('home', function () {
    return view('template2.home');
});

Route::get('category', function () {
    return view('template2.category');
});

Route::get('product', function () {
    return view('template2.product');
});

Route::get('promo', function () {
    return view('template2.promo');
});


