<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/',[FrontController::class,'branding'])->name('branding');
Route::get('/content',[FrontController::class,'content'])->name('content');
Route::get('/design',[FrontController::class,'design'])->name('design');
Route::get('/technology',[FrontController::class,'technology'])->name('technology');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::post('/contact-post',[App\Http\Controllers\ContactController::class,'add'])->name('contact-post');