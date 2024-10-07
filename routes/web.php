<?php

use App\Http\Controllers\SignLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/singup', function () {
    return view('singup');
})->name('singup');

Route::post('/singup', [SignLoginController::class, 'signup'])->name('singup'); 
Route::post('/login', [SignLoginController::class, 'loginCheck'])->name('login');

