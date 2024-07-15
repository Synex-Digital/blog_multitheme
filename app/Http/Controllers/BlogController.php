<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Photo;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();
        $category = Category::all();
        return view('dashboard.blog.index', [
            'blog'          => $blog,
            'categories'    => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog = Blog::all();
        $category = Category::all();
        return view('dashboard.blog.create', [
            'blog'          => $blog,
            'categories'    => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(Photo::upload($request->image,'/','sf'));
        // die();

        //old
        $request->validate([
            'category_id'       => 'required',
            'title'             => 'required',
            'author'            => 'required',
            'content'           => 'required',
            'seo_title'         => 'required',
            'seo_tags'          => 'required',
            'seo_description'   => 'required',

        ]);
        $blog = new Blog();

        $blog->category_id      = $request->category_id;
        $blog->author           = $request->author;
        $blog->title            = $request->title;
        $blog->content          = $request->content;
        $blog->image            = $request->has('image') ? Self::upload($request) : '';
        $blog->seo_title        = $request->seo_title;
        $blog->seo_description  = $request->seo_description;
        $blog->seo_tags         = $request->seo_tags;
        $blog->status           = $request->status;
        if($request->slug != null){
            $blog->slug         = $request->slug;
        }
        else{
            $blog->slug         = Str::slug($request->title, '-');
        }
        $blog->save();

        return back()->with('success', 'Blog created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::find($id);
        $category = Category::all();
        return view('dashboard.blog.show', [
            'blog'          => $blog,
            'categories'    => $category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        $category = Category::all();
        return view('dashboard.blog.edit', [
            'blog'          => $blog,
            'categories'    => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'             => 'required',
            'author'            => 'required',
            'content'           => 'required',
            'slug'              => 'required',
            'seo_title'         => 'required',
            'seo_tags'          => 'required',
            'seo_description'   => 'required',
        ]);

        $blog->category_id      = $request->category_id;
        $blog->author           = $request->author;
        $blog->title            = $request->title;
        $blog->content          = $request->content;
        $blog->seo_title        = $request->seo_title;
        $blog->seo_description  = $request->seo_description;
        $blog->seo_tags         = $request->seo_tags;
        $blog->status           = $request->status;
        $blog->slug             = $request->slug;
        $oldImage               = $blog->image;

        if ($request->image !== null){
            if (file_exists($oldImage)) {
                unlink($oldImage);
                File::delete($oldImage);
            }
            if ($request->has('image')) {
                $blog->image = Self::upload($request);
            }
        }

        $blog->save();
        return back()->with('success', 'Blog updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return back()->with('danger', 'Blog deleted!!');
    }

    static function upload($request){
        $imageName ='dashboards/theme1/images/blog/'. time() . '.' . $request->image->extension();
        $request->image->move(public_path('dashboards/theme1/images/blog'), $imageName);
        return $imageName;
    }
}
