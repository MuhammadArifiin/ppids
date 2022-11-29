<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class loginController extends Controller
{
    public function index()
    {
        return view('layouts.login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            Alert::success('success', 'Selamat Datang Admin');
            return redirect('admin-dashboard');
        } else {
            return back()->withErrors([
                'noValid' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }

    public function logout()
    {
        Auth::logout();
        Alert::success('success', 'Logout Successfully');
        return redirect('/admin-login');
    }
}
