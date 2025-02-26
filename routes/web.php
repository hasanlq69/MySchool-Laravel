<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Auth::routes(['register' => false]);
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard.index');
    });

    Route::get('/login', function () {
        return redirect()->route('admin.dashboard.index');
    });


});

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function(){

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
        //permissions
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'] ,'as' => 'admin']);
        //roles
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'] ,'as' => 'admin']);
        //users
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'] ,'as' => 'admin']);
        //tags
        Route::resource('/tag', App\Http\Controllers\Admin\TagController::class, ['except' => 'show' ,'as' => 'admin']);
        //categories
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => 'show' ,'as' => 'admin']);
        //posts
        Route::resource('/post', App\Http\Controllers\Admin\PostController::class, ['except' => 'show' ,'as' => 'admin']);
        //event
        Route::resource('/event', App\Http\Controllers\Admin\EventController::class, ['except' => 'show' ,'as' => 'admin']);
        //photo
        Route::resource('/photo', App\Http\Controllers\Admin\PhotoController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'admin']);
        //video
        Route::resource('/video', App\Http\Controllers\Admin\VideoController::class, ['except' => 'show' ,'as' => 'admin']);
        //slider
        Route::resource('/slider', App\Http\Controllers\Admin\SliderController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'admin']);
    });


});
