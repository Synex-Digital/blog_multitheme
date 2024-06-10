<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CustomeCodeController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// });

Route::resources([
    'category' => CategoryController::class,
    'blog' => BlogController::class,
    'user' => UserController::class,
    'config' => ConfigController::class,
    'social' => SocialController::class,
    'custom_code' => CustomeCodeController::class,
    'seo' => SeoController::class

]);

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
