<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Social;
use App\Models\Config;
use App\Models\Seo;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;

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

            // SEOMeta::setDescription($categoryView->seo_description);
            // SEOMeta::setKeywords($categoryView->seo_tags);
            // SEOMeta::setCanonical($configs->url . request()->getPathInfo());
            // OpenGraph::setDescription($categoryView->seo_description);
            // OpenGraph::setTitle($categoryView->seo_title);

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
                SEOMeta::setTitle($categoryView->seo_title.' - '.$seo->seo_title);
                SEOMeta::setDescription($seo->seo_description);
                SEOMeta::setKeywords($categoryView->seo_tags); // Set keywords
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

            // SEOMeta::setDescription($categoryView->seo_description);
            // SEOMeta::setKeywords($categoryView->seo_tags);
            // SEOMeta::setCanonical($configs->url . request()->getPathInfo());
            // OpenGraph::setDescription($categoryView->seo_description);
            // OpenGraph::setTitle($categoryView->seo_title);

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
                SEOMeta::setTitle($categoryView->seo_title.' - '.$seo->seo_title);
                SEOMeta::setDescription($seo->seo_description);
                SEOMeta::setKeywords($categoryView->seo_tags); // Set keywords
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
