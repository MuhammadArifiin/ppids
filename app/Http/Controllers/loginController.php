<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index () {
        return view('layouts.login');
    }

    public function checkLogin(Request $request){


        $request->validate([
            'email' => 'required', 
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('admin-dashboard');

        }else{
            return back()->withErrors([
                'noValid' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
}
