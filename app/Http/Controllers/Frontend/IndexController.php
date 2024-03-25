<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $homeSection = HomeSection::first();
        $aboutSection = AboutSection::first();
        return view("frontend.index", compact("homeSection", "aboutSection"));
    }
}
