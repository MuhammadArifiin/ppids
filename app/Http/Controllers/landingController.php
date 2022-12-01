<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\backgroundImageInHome;
use App\Models\ManageFeature;
use App\Models\Publications;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class landingController extends Controller
{
    public function index()
    {
        $publications = Publications::orderBy('created_at', 'desc')->paginate(5);
        $mostViewed = Publications::orderBy('tab_content', 'desc')->paginate(3);

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

        $backgroundImage = backgroundImageInHome::take(2)->get();
     
        return view('landing.home')->with(['publications' => $publications, 'mostViewed' => $mostViewed,
        'managePublication' => $managePublication, 'manageAbout' => $manageAbout, 'manageDivision' => $manageDivision , 
        'manageFacility' => $manageFacility, 'backgroundImage' => $backgroundImage]);
    }


    public function about()
    {
        $items = about::get();
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
        return view('landing.about', compact('items','managePublication','manageAbout', 'manageDivision','manageFacility'));
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
