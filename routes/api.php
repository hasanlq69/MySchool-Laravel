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
//events
Route::get('/event', [App\Http\Controllers\Api\EventController::class, 'index']);
Route::get('/event/{slug?}', [App\Http\Controllers\Api\EventController::class, 'show']);
Route::get('/homepage/event', [App\Http\Controllers\Api\EventController::class, 'EventHomePage']);
//slider
Route::get('/slider', [App\Http\Controllers\Api\SliderController::class, 'index']);
//tags
Route::get('/tag', [App\Http\Controllers\Api\TagController::class, 'index']);
Route::get('/tag/{slug?}', [App\Http\Controllers\Api\TagController::class, 'show']);
//category
Route::get('/category', [App\Http\Controllers\Api\CategoryController::class, 'index']);
Route::get('/category/{slug?}', [App\Http\Controllers\Api\CategoryController::class, 'show']);
//photo
Route::get('/photo', [App\Http\Controllers\Api\PhotoController::class, 'index']);
Route::get('/homepage/photo', [App\Http\Controllers\Api\PhotoController::class, 'PhotoHomepage']);
//video
Route::get('/video', [App\Http\Controllers\Api\VideoController::class, 'index']);
Route::get('/homepage/video', [App\Http\Controllers\Api\VideoController::class, 'VideoHomepage']);
