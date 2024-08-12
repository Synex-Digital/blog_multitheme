<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Themes;


class ThemeSelectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $theme_select = Themes::all();
        return view('dashboard.theme_select.index', [
            'theme_select' => $theme_select,
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
            'theme' => 'required',
        ]);

        $theme_select = Themes::find($request->theme);

        if($theme_select){

            Themes::query()->update(['status' => 'inactive']);

            $theme_select->status = 'active';

            $theme_select->save();

            // Redirect back with a success message
            return redirect()->route('theme_select.index')->with('success', 'Theme updated successfully.');
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
