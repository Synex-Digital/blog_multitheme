<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Social;
use App\Models\Config;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;


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

        SEOMeta::setTitle('Contact Us');
        // SEOMeta::setDescription('Contact page of the site for contact information');
        SEOMeta::setKeywords('yhgu,ugu,uyu');
        // OpenGraph::setDescription('Contact page of the site for contact information');
        OpenGraph::setTitle('Contact Us');

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

        SEOMeta::setTitle('About Us');
        // SEOMeta::setDescription('About page of the site for sites information');
        SEOMeta::setKeywords('yhgu,ugu,uyu');
        // OpenGraph::setDescription('About page of the site for sites information');
        OpenGraph::setTitle('About Us');

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

        SEOMeta::setTitle('Policy');
        // SEOMeta::setDescription('Policy page of the site for sites legal information');
        SEOMeta::setKeywords('dsf, defe, eef');
        // OpenGraph::setDescription('Policy page of the site for sites legal information');
        OpenGraph::setTitle('Policy');

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

        SEOMeta::setTitle('Contact Us');
        // SEOMeta::setDescription('Contact page of the site for contact information');
        SEOMeta::setKeywords('yhgu,ugu,uyu');
        // OpenGraph::setDescription('Contact page of the site for contact information');
        OpenGraph::setTitle('Contact Us');

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

        SEOMeta::setTitle('About Us');
        // SEOMeta::setDescription('About page of the site for sites information');
        SEOMeta::setKeywords('edfju, kedfn, kk');
        // OpenGraph::setDescription('About page of the site for sites information');
        OpenGraph::setTitle('About Us');

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

        SEOMeta::setTitle('Policy');
        // SEOMeta::setDescription('Policy page of the site for sites legal information');
        SEOMeta::setKeywords('dsf, defe, eef');
        // OpenGraph::setDescription('Policy page of the site for sites legal information');
        OpenGraph::setTitle('Policy');

        return view('themes.theme2.pages.policy', [
            'icon' => $icon,
            'configs' => $configs,
        ]);
    }
}
