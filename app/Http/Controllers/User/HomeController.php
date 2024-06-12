<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Themes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $themes = Themes::where('status','active')->first();
        if ($themes) {
            return view("Themes.$themes->name.index");
        }else {
            return view('Themes.theme1.index');
        }
    }
}
