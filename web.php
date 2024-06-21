<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwoController;

Route::get('/index', [TwoController::class, 'index']);

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/school', function () {
    return view('school');
});

Route::get('/contact', function () {
    return view('contact');
});
