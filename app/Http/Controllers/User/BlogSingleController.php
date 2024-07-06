<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogSingleController extends Controller
{
    public function blog_single(){
        $blog_view = Blog::all();
        $categories = Category::get();
        return view('Themes.theme1.pages.blog-single', [
            'blog_view' => $blog_view,
            'categories' => $categories,
        ]);
    }
    public function blog_slug($slug){
        $blog = Blog::where('slug', $slug)->first();
        return view('Themes.theme1.pages.blog-single', [
            'blog_view' => $blog,
        ]);
    }

}
