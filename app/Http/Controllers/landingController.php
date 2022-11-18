<?php

namespace App\Http\Controllers;

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

    // public function search()
    // {
    //     $publications = Publications::query()->when(request(key: 'search'), function ($query) {
    //         $query->where('title', 'LIKE', '%' . request(key: 'search') . '%')
    //         ->$query->where('content', 'LIKE', '%' . request(key: 'search') . '%');
    //     })->paginate()[0];
    //     $mostViewed = Publications::orderBy('tab_content', 'desc')->paginate(3);

    //     // dd($publications);
    //     return view('landing.home')->with(['publications' => $publications, 'mostViewed' => $mostViewed]);
    // }

    public function about()
    {
        return view('landing.about');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
