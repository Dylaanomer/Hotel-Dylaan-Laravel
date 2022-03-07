<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamerController;
use App\Http\Controllers\PagesController;

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

Route::get('/my-page', function () {
    return view('my-page');
});

Route::get('/kamers', function () {
    return view('kamers');
});

Route::get('/hotels', function () {
    return view('hotels');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pages', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/kamer', [App\Http\Controllers\KamerController::class, 'index'])->name('index');



