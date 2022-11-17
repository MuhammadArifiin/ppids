<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use Illuminate\Http\Request;

class divisionsController extends Controller
{
    public function index()
    {
        $divisions = Divisions::all();
        return view('landing.divisions', compact('divisions'));
    }
}
