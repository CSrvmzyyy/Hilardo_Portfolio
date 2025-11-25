<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main welcome page route
Route::get('/', function () {
    return view('welcome');
});

// Resume page route
Route::get('/resume', function () {
    return view('resume');
})->name('resume');

// Register routes
Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');

// Login routes
Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');

// Dashboard route
Route::get('dashboard', function(){
    return view('dashboard');
})->name('dashboard');