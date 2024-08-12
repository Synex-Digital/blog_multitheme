<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Social;
use App\Models\Config;

class ContactController extends Controller
{
    public function contacts(){

        //categories
        $categories = Category::get();

        //contact information
        $configs = Config::first();

        //social icons for footer
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        return view('themes.theme1.pages.contact', [
            'categories' => $categories,
            'configs' => $configs,
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }

    public function abouts(){

        //for blog items
        $blog_item = Blog::get();

        //categories
        $categories = Category::get();

        //social icons for footer
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        return view('themes.theme1.pages.about', [
            'blog_item' => $blog_item,
            'categories' => $categories,
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }

    public function policys(){

        //for blog items
        $blog_item = Blog::get();

        //categories
        $categories = Category::get();

        //social icons for footer
        $icon = Social::get();

        //for logo and favicon
        $configs = Config::first();

        return view('themes.theme1.pages.policy', [
            'blog_item' => $blog_item,
            'categories' => $categories,
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }


    public function theme2_contact(){
        //contact information
        $configs = Config::first();

        //social icons for footer
        $icon = Social::get();

        return view('themes.theme2.pages.contact', [
            'configs' => $configs,
            'icon' => $icon,
        ]);
    }

    public function theme2_about(){
        //social icons for footer
        $icon = Social::get();

        //contact information
        $configs = Config::first();

        return view('themes.theme2.pages.about', [
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }

    public function theme2_policy(){
        //social icons for footer
        $icon = Social::get();

        //contact information
        $configs = Config::first();

        return view('themes.theme2.pages.policy', [
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }
}
