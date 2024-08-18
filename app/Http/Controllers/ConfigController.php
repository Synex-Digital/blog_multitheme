<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use Illuminate\Support\Facades\File;
use Photo;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.config.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $config = Config::all();
        return view('dashboard.config.create', [
            'config' => $config	,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'favicon'          => 'required|image|mimes:jpeg,png,jpg,webp,jfif|max:1024',
            'logo'             => 'required|image|mimes:jpeg,png,jpg,webp,jfif|max:1024',
            'address'          => 'required',
            'email'            => 'required',
            'phone'            => 'required',
            'status'           => 'required',
        ]);
        $config = new Config();

        Photo::upload($request->favicon, 'dashboards/theme1/images/config_pics/favicon', 'FAV', [600, 500]);
        Photo::upload($request->logo, 'dashboards/theme1/images/config_pics/logo', 'LOGO', [600, 500]);

        $config->favicon        = Photo::$name?Photo::$name:'Null';
        $config->logo           = Photo::$name?Photo::$name:'Null';
        $config->name           = $request->name;
        $config->address        = $request->address;
        $config->email          = $request->email;
        $config->phone          = $request->phone;
        $config->status         = $request->status;
        $config->save();
        return back()->with('success', 'Config created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $config = Config::find($id);
        return view('dashboard.config.edit', [
            'config' => $config	,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, config $config)
    {
        $request->validate([
            'name'              => 'required',
            'email'             => 'required',
            'address'           => 'required',
            'phone'             => 'required',
            'status'            => 'required',
        ]);

        $config->name           = $request->name;
        $config->email          = $request->email;
        $config->address        = $request->address;
        $config->phone          = $request->phone;
        $config->status         = $request->status;


        if ($request->has('favicon')) {
            Photo::delete($config->favicon);
            Photo::upload($request->image, 'dashboards/theme1/images/config_pics/favicon', 'FAV', [600, 500]);
            $config->favicon = Photo::$name?Photo::$name:'Null';
        }

        if ($request->has('logo')) {
            Photo::delete($config->logo);
            Photo::upload($request->image, 'dashboards/theme1/images/config_pics/logo', 'LOGO', [600, 500]);
            $config->logo = Photo::$name?Photo::$name:'Null';
        }

        $config->save();
        return back()->with('success', 'Config updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $config = Config::find($id);
        $config->delete();

        Photo::delete($config->logo);
        Photo::delete($config->favicon);
        return back()->with('danger', 'Blog deleted!!');
    }


}
