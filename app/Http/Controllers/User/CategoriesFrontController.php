<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Social;
use App\Models\Config;


use Illuminate\Http\Request;

class CategoriesFrontController extends Controller
{
    public function cat($slug){
        $categoryView = Category::where('slug', $slug)->first();

        if ($categoryView) {
            $category = Category::where('status', 'active')->get();
            //getting most view alltime blog
            $best = Blog::orderBy('view_count', 'desc')->take(4)->get();
            //Recent
            $recent = Blog::orderBy('id', 'desc')->take(4)->get();
            //category product
            $categoryBlog = Blog::where('category_id', $categoryView->id)->paginate(12);
            //social icons for footer
            $icon = Social::get();
            //for logo and favicon
            $configs = Config::first();
            return view('themes.theme1.pages.category', [
                'categoryBlog' => $categoryBlog,
                'categoryView' => $categoryView,
                'recent' => $recent,
                'best' => $best,
                'category' => $category,
                'icon' => $icon,
                'configs' => $configs,
            ]);
        }else {
            return back()->with('success','Category not found');
        }
    }

    public function theme2_cat($slug){
        $categoryView = Category::where('slug', $slug)->first();

        if ($categoryView) {
            $category = Category::where('status', 'active')->get();
            //getting most view alltime blog
            $best = Blog::orderBy('view_count', 'desc')->take(4)->get();
            //Recent
            $recent = Blog::orderBy('id', 'desc')->take(4)->get();
            //category product
            $categoryBlog = Blog::where('category_id', $categoryView->id)->paginate(12);
            //social icons for footer
            $icon = Social::get();
            //for logo and favicon
            $configs = Config::first();
            return view('themes.theme2.pages.category', [
                'categoryBlog' => $categoryBlog,
                'categoryView' => $categoryView,
                'recent' => $recent,
                'best' => $best,
                'category' => $category,
                'icon' => $icon,
                'configs' => $configs,
            ]);
        }else {
            return back()->with('success','Category not found');
        }
    }

}
