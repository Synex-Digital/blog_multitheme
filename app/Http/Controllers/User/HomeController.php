<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Themes;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Social;
use App\Models\Config;
use App\Models\Newsletter;
use App\Models\Seo;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;

class HomeController extends Controller
{
    public function index(){
        $themes = Themes::where('status','active')->first();

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

        //Banner post
        $banner = Blog::orderBy('id', 'desc')->first();

        //for logo and favicon
        $configs = Config::first();

        $img = null;
        $url = null;
        $name = null;

        if($configs){
            $img = url('/').'/'.$configs->logo;
            $url = $configs->url;
            $name = $configs->name;

            //canonical
            SEOMeta::setCanonical($configs->url);
        }

        $seo = Seo::where('page', 'home')->first();

        if($seo){

            // Set SEO meta tags
            SEOMeta::setTitle($seo->seo_title);
            SEOMeta::setDescription($seo->seo_description);
            SEOMeta::setKeywords($seo->seo_tags); // Set keywords
            SEOTools::opengraph()->setUrl(url()->current());

            //OpenGraph
            OpenGraph::setUrl(url()->current());
            OpenGraph::setTitle($seo->seo_title); // define title
            OpenGraph::setDescription($seo->seo_description); // define description
            OpenGraph::setType('website');
            OpenGraph::setUrl(url()->current()); // define url
            OpenGraph::addImage($img); // add image url
            OpenGraph::setSiteName($name); // define site_name

            //twitter
            TwitterCard::setUrl(url()->current()); // url of twitter card tag
            TwitterCard::setImage($img);

            //JsonLd

            JsonLd::setType('Website');
            JsonLd::setTitle($seo->seo_title);
            JsonLd::setDescription($seo->seo_description);
            JsonLd::setUrl(url()->current());
            JsonLd::addValue('datePublished', $seo->created_at);
            JsonLd::addValue('dateModified', $seo->updated_at);
            // JsonLd::addValue('isPartOf', [
            //     "@type" => "WebSite",
            //     "@id" => $url,
            //     "url" => $url
            // ]);
            JsonLd::addValue('publisher', [
                'Organization' => 'Synex Digital',
                '@type' => 'Website',
                'name' => $name,
                'url' => $url,
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => $img,
                    'caption' => $seo->seo_description,
                    'contentUrl' => url()->current(),
                ],
            ]);
        }



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

        $blog_paginate = Blog::where('status', 'active')->paginate(12);

        //for logo and favicon
        $configs = Config::first();


        $img = null;
        $url = null;
        $name = null;

        if($configs){
            $img = url('/').'/'.$configs->logo;
            $url = $configs->url;
            $name = $configs->name;

            //canonical
            SEOMeta::setCanonical($configs->url);
        }

        $seo = Seo::where('page', 'home')->first();

        if($seo){

            // Set SEO meta tags
            SEOMeta::setTitle($seo->seo_title);
            SEOMeta::setDescription($seo->seo_description);
            SEOMeta::setKeywords($seo->seo_tags); // Set keywords
            SEOTools::opengraph()->setUrl(url()->current());

            //OpenGraph
            OpenGraph::setUrl(url()->current());
            OpenGraph::setTitle($seo->seo_title); // define title
            OpenGraph::setDescription($seo->seo_description); // define description
            OpenGraph::setType('webpage');
            OpenGraph::setUrl(url()->current()); // define url
            OpenGraph::addImage($img); // add image url
            OpenGraph::setSiteName($name); // define site_name

            //twitter
            TwitterCard::setUrl(url()->current()); // url of twitter card tag
            TwitterCard::setImage($img);

            //JsonLd

            JsonLd::setType('Webpage');
            JsonLd::setTitle($seo->seo_title);
            JsonLd::setDescription($seo->seo_description);
            JsonLd::setUrl(url()->current());
            JsonLd::addValue('datePublished', $seo->created_at);
            JsonLd::addValue('dateModified', $seo->updated_at);
            // JsonLd::addValue('isPartOf', [
            //     "@type" => "WebSite",
            //     "@id" => $url,
            //     "url" => $url
            // ]);
            JsonLd::addValue('publisher', [
                'Organization' => 'Synex Digital',
                '@type' => 'Webpage',
                'name' => $name,
                'url' => $url,
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => $img,
                    'caption' => $seo->seo_description,
                    'contentUrl' => url()->current(),
                ],
            ]);
        }


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


        $blog_paginate = Blog::where('status', 'active')->paginate(12);

        //for logo and favicon
        $configs = Config::first();

        $img = null;
        $url = null;
        $name = null;

        if($configs){
            $img = url('/').'/'.$configs->logo;
            $url = $configs->url;
            $name = $configs->name;

            //canonical
            SEOMeta::setCanonical($configs->url);
        }

        $seo = Seo::where('page', 'home')->first();

        if($seo){

            // Set SEO meta tags
            SEOMeta::setTitle($seo->seo_title);
            SEOMeta::setDescription($seo->seo_description);
            SEOMeta::setKeywords($seo->seo_tags); // Set keywords
            SEOTools::opengraph()->setUrl(url()->current());

            //OpenGraph
            OpenGraph::setUrl(url()->current());
            OpenGraph::setTitle($seo->seo_title); // define title
            OpenGraph::setDescription($seo->seo_description); // define description
            OpenGraph::setType('webpage');
            OpenGraph::setUrl(url()->current()); // define url
            OpenGraph::addImage($img); // add image url
            OpenGraph::setSiteName($name); // define site_name

            //twitter
            TwitterCard::setUrl(url()->current()); // url of twitter card tag
            TwitterCard::setImage($img);

            //JsonLd

            JsonLd::setType('Webpage');
            JsonLd::setTitle($seo->seo_title);
            JsonLd::setDescription($seo->seo_description);
            JsonLd::setUrl(url()->current());
            JsonLd::addValue('datePublished', $seo->created_at);
            JsonLd::addValue('dateModified', $seo->updated_at);
            // JsonLd::addValue('isPartOf', [
            //     "@type" => "WebSite",
            //     "@id" => $url,
            //     "url" => $url
            // ]);
            JsonLd::addValue('publisher', [
                'Organization' => 'Synex Digital',
                '@type' => 'Webpage',
                'name' => $name,
                'url' => $url,
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => $img,
                    'caption' => $seo->seo_description,
                    'contentUrl' => url()->current(),
                ],
            ]);
        }


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



