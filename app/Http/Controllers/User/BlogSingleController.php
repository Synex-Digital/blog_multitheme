<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Social;
use App\Models\Category;
use App\Models\Config;

class BlogSingleController extends Controller
{
    public function blog_single(){

        //blogs
        $blog_view = Blog::all();

        //categories
        $categories = Category::get();

        //social icons for footer
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        return view('themes.theme1.pages.blog-single', [
            'blog_view' => $blog_view,
            'categories' => $categories,
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }
    public function blog_slug($slug){
        $blog = Blog::where('slug', $slug)->first();

        //social icons for footer
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        return view('themes.theme1.pages.blog-single', [
            'blog_view' => $blog,
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }


    public function theme2_blog_single(){

        //blogs
        $blog_view = Blog::all();

        //categories
        $categories = Category::get();

        //social icons for footer
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        return view('themes.theme2.pages.blog-single', [
            'blog_view' => $blog_view,
            'categories' => $categories,
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }
    public function theme2_blog_slug($slug){
        $blog = Blog::where('slug', $slug)->first();

        //social icons for footer
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        return view('themes.theme2.pages.blog-single', [
            'blog_view' => $blog,
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }

}
