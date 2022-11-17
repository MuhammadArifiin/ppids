<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminProfileController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.profile', compact('user'));
    }
}
