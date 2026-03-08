<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/subscribe', [App\Http\Controllers\SubscriberController::class, 'subscribe']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
