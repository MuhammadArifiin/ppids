<?php

namespace App\Http\Controllers;

use App\Models\ManageFeature;
use App\Models\Socmed;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class loginController extends Controller
{
    public function index()
    {
        $managePublication = ManageFeature::where('name_feature', 'publication')->get();
        foreach($managePublication as $data){
            $managePublication = $data->active;
        }

        $manageAbout = ManageFeature::where('name_feature', 'about')->get();
        foreach($manageAbout as $data){
            $manageAbout = $data->active;
        }

        $manageDivision = ManageFeature::where('name_feature', 'division')->get();
        foreach($manageDivision as $data){
            $manageDivision = $data->active;
        }

        $manageFacility = ManageFeature::where('name_feature', 'facility')->get();
        foreach($manageFacility as $data){
            $manageFacility = $data->active;
        }

        $manageContact = ManageFeature::where('name_feature', 'facility')->get();
        foreach ($manageContact as $data) {
            $manageContact = $data->active;
        }

        $socmed = Socmed::get();

        return view('layouts.login', compact('managePublication','manageAbout','manageDivision','manageFacility', 'manageContact', 'socmed'));
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
