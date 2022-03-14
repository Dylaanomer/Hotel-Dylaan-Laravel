<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamerController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('kamers', KamerController::class);



