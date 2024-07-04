<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;

Route::get('/', function() {
    return view('home');
});


Route::resource('drinks', DrinkController::class);