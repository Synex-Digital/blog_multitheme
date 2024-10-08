<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;


use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->search;
        $results = Blog::select('id', 'title', 'updated_at', 'slug')->where(function ($query) use ($searchTerm) {
            $query->where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('seo_tags', 'like', '%' . $searchTerm . '%');
        })->take(10)
            ->get();
        return response()->json([
            'status'    => 1,
            'data'      => $results,
        ]);
    }

    public function theme2_search(Request $request)
    {
        $searchTerm = $request->search;
        $results = Blog::select('id', 'title', 'updated_at', 'slug')->where(function ($query) use ($searchTerm) {
            $query->where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('seo_tags', 'like', '%' . $searchTerm . '%');
        })->take(10)
            ->get();
        return response()->json([
            'status'    => 1,
            'data'      => $results,
        ]);
    }
}



