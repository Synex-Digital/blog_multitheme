<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Themes;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $themes = Themes::where('status','active')->first();
        $blog_items = Blog::get();
        $categories = Category::get();
        if ($themes) {
            return view("Themes.$themes->name.index",[
                'blog_items' => $blog_items,
                'categories' => $categories,
            ]);
        }
        else {
            return view('Themes.theme1.index', [
                'blog_items' => $blog_items,
                'categories' => $categories,
            ]);
        }
    }


}
