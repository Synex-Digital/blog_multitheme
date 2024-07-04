<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class CategoriesFrontController extends Controller
{
    public function cat(){
        $categories = Category::get();
        $blog_item = Blog::get();
        return view('Themes.theme1.pages.category', [
            'categories' => $categories,
            'blog_item' => $blog_item,
        ]);
    }

}
