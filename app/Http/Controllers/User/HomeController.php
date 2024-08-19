<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Themes;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Social;
use App\Models\Config;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class HomeController extends Controller
{
    public function index(){
        $themes = Themes::where('status','active')->first();

        SEOMeta::setTitle('Home');
        // SEOMeta::setDescription('Worem Ipsum Nam nec tellus a odio tincidunt auctor. Proin gravida nibh vel velit auctor aliquet. Bendum auctor, nisi elit conseq aeuat ipsum, nec sagittis sem nibhety');
        SEOMeta::setKeywords('home, synex, digital');
        // OpenGraph::setDescription('Worem Ipsum Nam nec tellus a odio tincidunt auctor. Proin gravida nibh vel velit auctor aliquet. Bendum auctor, nisi elit conseq aeuat ipsum, nec sagittis sem nibhety');
        OpenGraph::setTitle('Home');


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

        $blog_paginate = Blog::where('status', 'active')->paginate(12);

        SEOMeta::setTitle('All Blogs');
        // SEOMeta::setDescription('Here all blogs of the site are listed');
        SEOMeta::setKeywords('yhgu,ugu,uyu');
        // OpenGraph::setDescription('Here all blogs of the site are listed');
        OpenGraph::setTitle('All Blogs');

        return view('themes.theme1.pages.all-blog', [
            'blog_items' => $blog_items,
            'recent' => $recent,
            'icon' => $icon,
            'configs' => $configs,
            'category' => $category,
            'blog_paginate' => $blog_paginate,
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

        $blog_paginate = Blog::where('status', 'active')->paginate(12);


        SEOMeta::setTitle('All Blogs');
        // SEOMeta::setDescription('Here all blogs of the site are listed');
        SEOMeta::setKeywords('yhgu,ugu,uyu');
        // OpenGraph::setDescription('Here all blogs of the site are listed');
        OpenGraph::setTitle('All Blogs');

        // $commentsCount = Comment::where('blog_id', $blog_items->id)->count();

        return view('themes.theme2.pages.all-blog', [
            'blog_items' => $blog_items,
            'recent' => $recent,
            'icon' => $icon,
            'configs' => $configs,
            // 'commentsCount' => $commentsCount,
            'category' => $category,
            'blog_paginate' => $blog_paginate,

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
