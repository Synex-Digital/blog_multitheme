<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Themes;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Social;
use App\Models\Config;
use App\Models\Newsletter;
use App\Models\Comment;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use ReflectionFunctionAbstract;

class HomeController extends Controller
{
    public function index(){
        $themes = Themes::where('status','active')->first();
// dd($themes);
        //for blog list show
        $blog_items = Blog::get();

        //category wise blog
        $categoryBlog = Category::get();
        $category = Category::where('status','active')->get();

        //for recent blog
        $recent = Blog::orderBy('id', 'desc')->take(4)->get();

        $blog_paginate = Blog::where('status', 'active')->paginate(12);

        //for social icons
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        //Banner post
        $banner = Blog::orderBy('id', 'desc')->first();

        if ($themes) {

            // $this->optimize();

            // return response()->json(['message' => 'Theme switched successfully!']);

            return view("themes.$themes->name.index",[
                'blog_items' => $blog_items,
                'categoryBlog' => $categoryBlog,
                'category' => $category,
                'recent' => $recent,
                'icon' => $icon,
                'configs' => $configs,
                'banner' => $banner,
                'blog_paginate' => $blog_paginate,
            ]);

        }
        else {

            // $this->optimize();

            // return response()->json(['message' => 'Theme switched successfully!']);

            return view('themes.theme1.index', [
                'blog_items' => $blog_items,
                'categoryBlog' => $categoryBlog,
                'category' => $category,
                'recent' => $recent,
                'icon' => $icon,
                'configs' => $configs,
                'banner' => $banner,
                'blog_paginate' => $blog_paginate,
            ]);
        }
    }

    // private function optimize()
    // {
    //     // Execute optimization commands
    //     Artisan::call('optimize');
    //     Artisan::call('config:cache');
    //     Artisan::call('route:cache');
    //     Artisan::call('view:cache');
    // }

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


    public function theme2_all_blogs(){

        //all blogs
        $blog_items = Blog::get();

        $category = Category::where('status','active')->get();

        //for recent blog
        $recent = Blog::orderBy('id', 'desc')->take(4)->get();

        //for social icons
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        // $commentsCount = Comment::where('blog_id', $blog_items->id)->count();

        return view('themes.theme2.pages.all-blog', [
            'blog_items' => $blog_items,
            'recent' => $recent,
            'icon' => $icon,
            'configs' => $configs,
            // 'commentsCount' => $commentsCount,
            'category' => $category,

        ]);
    }

    public function newsletter_save(Request $request){

        $themes = Themes::where('status','active')->first();
        if($themes){
            Newsletter::create([
                'email' => $request->email,
            ]);
            return back()->with('success', 'Thanks for subscribing us.');
        }
        else{
            Newsletter::create([
                'email' => $request->email,
            ]);
            return back()->with('success', 'Thanks for subscribing us.');
        }

    }

}
