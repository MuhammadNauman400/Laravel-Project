<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontPostController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return redirect()->route('posts.dashboard');
});

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {

    // Admin-only routes
    Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('posts.dashboard');
        Route::resource('posts', PostController::class);
    });

    // User routes
    Route::get('/user/posts', [FrontPostController::class, 'index'])->name('user.posts');
    Route::get('/news', [NewsController::class, 'getNews'])->name('frontend.news');
});














