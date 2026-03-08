<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/category/{category:slug}', [BlogController::class, 'category'])->name('category');
Route::get('/post/{slug}', [BlogController::class, 'post'])->name('post');
Route::get('/about', [BlogController::class, 'about'])->name('about');
Route::get('/contact', [BlogController::class, 'contact'])->name('contact');

Route::get('/api/search', [\App\Http\Controllers\SearchController::class, 'search'])->name('api.search');
