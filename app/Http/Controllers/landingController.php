<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\Publications;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class landingController extends Controller
{
    public function index()
    {
        $publications = Publications::orderBy('created_at', 'desc')->paginate(5);
        $mostViewed = Publications::orderBy('tab_content', 'desc')->paginate(3);
        return view('landing.home')->with(['publications' => $publications, 'mostViewed' => $mostViewed]);
    }


    public function about()
    {
        $items = about::get();
        return view('landing.about', compact('items'));
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
