<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class ContactController extends Controller
{
    public function contacts(){
        return view('Themes.theme1.pages.contact');
    }

    public function abouts(){
        $blog_item = Blog::get();
        $categories = Category::get();
        return view('Themes.theme1.pages.about', [
            'blog_item' => $blog_item,
            'categories' => $categories,
        ]);
    }
}
