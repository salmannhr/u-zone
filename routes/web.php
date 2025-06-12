<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;

Route::get('/', [MediaController::class, 'landing'])->name('landing');
Route::get('/home', [MediaController::class, 'home'])->middleware('auth')->name('home');
Route::get('/about', [MediaController::class, 'about'])->name('about');
Route::post('/upload', [MediaController::class, 'upload'])->middleware('auth')->name('upload');

// Authentication views
Route::get('/login',  () {
    return view('login');
})->name('login.view');

Route::get('/signup', functio () {
    return view('signup');
})->name('signup.view')

// Authentication actions
Route::post('/login', [MediaController::class, 'login'])->name('login');
Route::post('/signup', [MediaController::class, 'signup'])->name('signup');

// Logout route
Route::post('/logout', [MediaController::class, 'logout'])->name('logout')->middleware('auth');