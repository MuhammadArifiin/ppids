<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;

class facilitiesController extends Controller
{
    public function index()
    {
        $facilities = Facilities::all();
        return view('landing.facilities', compact('facilities'));
    }
}
