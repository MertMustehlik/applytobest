<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

Route::get('/',[FrontController::class,'branding'])->name('branding');
Route::get('/content',[FrontController::class,'content'])->name('content');
Route::get('/design',[FrontController::class,'design'])->name('design');
Route::get('/technology',[FrontController::class,'technology'])->name('technology');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::post('/contact-post',[App\Http\Controllers\ContactController::class,'add'])->name('contact-post');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix('adminpanel')->group(function () {
    Route::get('/',[AdminController::class,'home'])->name('admin-home');
    Route::get('/contact',[AdminController::class,'contact'])->name('admin-contact');
});