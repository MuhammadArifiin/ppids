<?php

namespace App\Http\Controllers;

use App\Models\ManageFeature;
use App\Models\Socmed;
use Illuminate\Http\Request;

class socialMediaController extends Controller
{
    public function index()
    {
        $socmed = Socmed::all();
        $managePublication = ManageFeature::where('name_feature', 'publication')->get();
        foreach ($managePublication as $data) {
            $managePublication = $data->active;
        }

        $manageAbout = ManageFeature::where('name_feature', 'about')->get();
        foreach ($manageAbout as $data) {
            $manageAbout = $data->active;
        }

        $manageDivision = ManageFeature::where('name_feature', 'division')->get();
        foreach ($manageDivision as $data) {
            $manageDivision = $data->active;
        }

        $manageFacility = ManageFeature::where('name_feature', 'facility')->get();
        foreach ($manageFacility as $data) {
            $manageFacility = $data->active;
        }

        return view('landing.socmed', compact('socmed', 'managePublication', 'manageAbout', 'manageDivision','manageFacility'));
    }
}
