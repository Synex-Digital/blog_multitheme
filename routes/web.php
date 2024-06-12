<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CustomeCodeController;
use App\Http\Controllers\User\BlogSingleController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\User\HomeController as UserHomeController;

use App\Models\Themes;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/',[UserHomeController::class, 'index'])->name('home');
Route::get('/blog-single', [BlogSingleController::class, 'index']->name('blog-single'));

// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// });



// backend routes
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
