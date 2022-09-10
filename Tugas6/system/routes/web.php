<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('home', [HomeController::class, 'showHome']);
Route::get('category', [HomeController::class, 'showCategory']);
Route::get('promo', [HomeController::class, 'showPromo']);

Route::get('test/{product}/{haraMin?}/{hargaMax?}',[HomeController::class, 'test']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('product/filter', [ProductController::class, 'filter']);
    Route::resource('product', ProductController::class);
    Route::resource('user', UserController::class);

});



Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);