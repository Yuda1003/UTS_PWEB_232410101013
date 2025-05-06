<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('login');
})->name('login.form');

Route::post('/login', [PageController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/pengelolaan', [PageController::class, 'dashboard'])->name('pengelolaan');

Route::get('profile', function () {
    return view('profil');
})->name('profile');