<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class CategoriesFrontController extends Controller
{
    public function cat($slug){
        $categoryView = Category::where('slug', $slug)->first();
        $category = Category::where('status', 'active')->get();

        //getting most view alltime blog
        $best = Blog::orderBy('view_count', 'desc')->take(4)->get();

        //Recent
        $recent = Blog::orderBy('id', 'desc')->take(4)->get();

        //category product
        $categoryBlog = Blog::where('category_id', $categoryView->id)->paginate(12);

        return view('Themes.theme1.pages.category', [
            'categoryBlog' => $categoryBlog,
            'categoryView' => $categoryView,
            'recent' => $recent,
            'best' => $best,
            'category' => $category,
        ]);
    }

}
