<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;

// Main Resume Page at homepage
Route::view('/', 'resume')->name('home');

// Resume also accessible at /resume
Route::view('/resume', 'resume')->name('resume');

// Projects Routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Contact Route
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::resource('projects', ProjectController::class)->except(['index', 'show']);
    Route::resource('skills', SkillController::class);
    Route::get('messages', [ContactMessageController::class, 'index'])->name('admin.messages.index');
});






Route::get('register', [authController:: class, 'showRegister'])->name('register.form')
Route::post('register',[authController::class, 'register'])->name ('register')
Route::post('login',[authController::class, 'showlogin']) -> name ('login.form');

Route::get('login', [authController:: class, 'showLogin'])->name('login.form')
Route::post('login',[authController::class, 'login']) -> name ('login.form');

Route::get('dashboard', function(){
    return view('dashboard');
})