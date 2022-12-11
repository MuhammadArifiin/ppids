<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\backgroundImageInHome;
use App\Models\Contact;
use App\Models\ManageFeature;
use App\Models\Publications;
use App\Models\Socmed;

class landingController extends Controller
{
    public function index()
    {
        $publications = Publications::orderBy('created_at', 'desc')->paginate(5);
        $mostViewed = Publications::orderBy('tab_content', 'desc')->paginate(3);

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

        $socmed = Socmed::get();

        $backgroundImage = backgroundImageInHome::get();

        $manageContact = ManageFeature::where('name_feature', 'facility')->get();
        foreach ($manageContact as $data) {
            $manageContact = $data->active;
        }

        return view('landing.home')->with([
            'publications' => $publications, 'mostViewed' => $mostViewed,
            'managePublication' => $managePublication, 'manageAbout' => $manageAbout, 'manageDivision' => $manageDivision,
            'manageFacility' => $manageFacility,
            'socmed' => $socmed, 'backgroundImage' => $backgroundImage, 'manageContact' => $manageContact
        ]);
    }


    public function about()
    {
        $items = about::get();
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

        $manageContact = ManageFeature::where('name_feature', 'facility')->get();
        foreach ($manageContact as $data) {
            $manageContact = $data->active;
        }

        $socmed = Socmed::get();


        return view('landing.about', compact('items', 'managePublication', 'manageAbout', 'manageDivision', 'manageFacility', 'manageContact', 'socmed'));
    }
}
