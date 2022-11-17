<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use Illuminate\Http\Request;

class publicationsController extends Controller
{
    public function index()
    {
        $publications = Publications::all();
        return view('landing.publications', compact('publications'));
    }
}
