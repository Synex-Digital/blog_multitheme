<?php

//Backend Controllers
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CustomeCodeController;
use App\Http\Controllers\SeoController;

//Frontend Controllers
use App\Http\Controllers\User\BlogSingleController;
use App\Http\Controllers\User\CategoriesFrontController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\User\HomeController as UserHomeController;

use App\Models\Themes;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


//Frontend Routes
Route::get('/',[UserHomeController::class, 'index'])->name('home');
Route::get('/all-blogs',[UserHomeController::class, 'all_blogs'])->name('all_blogs');
Route::get('/blog-single', [BlogSingleController::class, 'blog_single'])->name('blog_single');
Route::get('/blog/single/{slug}', [BlogSingleController::class, 'blog_slug'])->name('blog_slug');
Route::get('/categories/{slug}', [CategoriesFrontController::class, 'cat'])->name('categories');
Route::get('/contact', [ContactController::class, 'contacts'])->name('contact');
Route::get('/about', [ContactController::class, 'abouts'])->name('about');
Route::get('/policy', [ContactController::class, 'policys'])->name('policy');
Route::get('/search', [SearchController::class, 'search'])->name('search');

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
