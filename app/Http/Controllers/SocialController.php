<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use Illuminate\Support\Facades\File;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social = Social::all();
        return view('dashboard.social.index', [
            'social' => $social,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'link' => 'required',
        ]);

        $social = new Social();
        $social->logo          = $request->logo;
        $social->link          = $request->link;
        $social->status        = $request->status;
        $social->save();
        return back()->with('success', 'Social Link created successfully');
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
        $social = Social::find($id);
        return view('dashboard.social.edit', [
            'social' => $social,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $request->validate([
            'link'          => 'required',
        ]);

        $social->logo         = $request->logo;
        $social->link         = $request->link;
        $social->status       = $request->status;

        $social->save();
        return back()->with('success', 'Social Link updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $social = Social::find($id);
        $social->delete();
        return back()->with('danger', 'Link deleted successfully!!');
    }


}
