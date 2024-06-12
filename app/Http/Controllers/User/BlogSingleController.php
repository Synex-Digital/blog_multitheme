<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogSingleController extends Controller
{
    public function index(){
        $blog = Blog::all();
        return view('Themes.theme1.pages.blog-single', [
        'blog' => $blog
    ]);
    }

}
