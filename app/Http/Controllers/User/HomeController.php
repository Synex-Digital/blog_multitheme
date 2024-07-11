<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Themes;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Social;
use App\Models\Config;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $themes = Themes::where('status','active')->first();

        //for blog list show
        $blog_items = Blog::get();

        //category wise blog
        $categoryBlog = Category::get();
        $category = Category::where('status','active')->get();

        //for recent blog
        $recent = Blog::orderBy('id', 'desc')->take(4)->get();

        //for social icons
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        //Banner post
        $banner = Blog::orderBy('id', 'desc')->first();

        if ($themes) {
            return view("themes.$themes->name.index",[
                'blog_items' => $blog_items,
                'categoryBlog' => $categoryBlog,
                'category' => $category,
                'recent' => $recent,
                'icon' => $icon,
                'configs' => $configs,
                'banner' => $banner,

            ]);
        }
        else {
            return view('themes.theme1.index', [
                'blog_items' => $blog_items,
                'categoryBlog' => $categoryBlog,
                'category' => $category,
                'recent' => $recent,
                'icon' => $icon,
                'configs' => $configs,
                'banner' => $banner,
            ]);
        }
    }

    public function all_blogs(){

        //all blogs
        $blog_items = Blog::get();

        $category = Category::where('status','active')->get();

        //for recent blog
        $recent = Blog::orderBy('id', 'desc')->take(4)->get();

        //for social icons
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        return view('themes.theme1.pages.all-blog', [
            'blog_items' => $blog_items,
            'recent' => $recent,
            'icon' => $icon,
            'configs' => $configs,
            'category' => $category,

        ]);
    }


}
