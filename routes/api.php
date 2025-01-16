<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//posts
Route::get('/post', [App\Http\Controllers\Api\PostController::class, 'index']);
Route::get('/post/{id?}', [App\Http\Controllers\Api\PostController::class, 'show']);
Route::get('/homepage/post', [App\Http\Controllers\Api\PostController::class, 'PostHomePage']);
