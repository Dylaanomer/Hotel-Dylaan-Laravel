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

Route::get('/pages',
[PagesController::class, 'index']);

Route::get('/kamers',
    [KamerController::class, 'index']);

Route::resource(name: 'boekingen',controller: 'BoekingController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



