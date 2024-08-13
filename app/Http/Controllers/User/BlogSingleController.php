<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Social;
use App\Models\Category;
use App\Models\Comment;
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


    public function user_comment(Request $request){

        $comment = new Comment();

        $comment->blog_id   = $request->blog_id;
        $comment->name      = $request->name;
        $comment->email     = $request->email;
        $comment->message   = $request->message;
        $comment->save();

        return back();
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

        //for user comment
        $comment = Comment::all();

        return view('themes.theme2.pages.blog-single', [
            'blog_view' => $blog_view,
            'categories' => $categories,
            'icon' => $icon,
            'configs' => $configs,
            'comment' => $comment,
        ]);
    }

    public function theme2_blog_slug($slug){
        $blog = Blog::where('slug', $slug)->first();

        //social icons for footer
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        $comment = Comment::where('blog_id', $blog->id)->get();

        $shareComponent = \Share::page(
            'http://127.0.0.1:8000/theme2/blog/single/'.$slug,
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('themes.theme2.pages.blog-single', [
            'blog_view' => $blog,
            'icon' => $icon,
            'configs' => $configs,
            'comment' => $comment,
            'shareComponent' => $shareComponent,
        ]);
    }

}
