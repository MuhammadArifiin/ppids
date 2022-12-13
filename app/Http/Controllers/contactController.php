<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ManageFeature;
use App\Models\Socmed;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index() {
        $contact = Contact::get();
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

        $manageContact = ManageFeature::where('name_feature', 'contact')->get();
        foreach ($manageContact as $data) {
            $manageContact = $data->active;
        }

        $socmed = Socmed::get();

        $manageContact = ManageFeature::where('name_feature', 'facility')->get();
        foreach ($manageContact as $data) {
            $manageContact = $data->active;
        }


        return view('landing.contact', compact('contact', 'managePublication', 'manageAbout', 'manageDivision', 'manageFacility', 'manageContact', 'socmed'));
    }
}
