<?php

namespace App\Http\Controllers;

use App\Models\ManageFeature;
use App\Models\Publications;
use App\Models\Socmed;
use Illuminate\Http\Request;

class publicationsController extends Controller
{
    public function index()
    {
        $publications = Publications::all();
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

        return view('landing.publications', compact('publications', 'managePublication', 'manageAbout', 'manageDivision', 'manageFacility', 'manageContact', 'socmed'));
    }

    public function getArticle($id)
    {
        $publications = Publications::find($id);

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

        $publications->update([
            'tab_content' => $publications->tab_content + 1
        ]);

        return view('landing.article', compact(
            'publications',
            'managePublication',
            'manageAbout',
            'manageDivision',
            'manageFacility',
            'publications',
            'manageContact',
            'socmed'
        ));
    }

    public function search(Request $request)
    {
        $keyword = $request->find;

        $publications = Publications::where('title', 'LIKE', '%' . $keyword . '%')->orWhere('content', 'LIKE', '%' . $keyword . '%')->get();

        return view('landing.publications', compact('publications'));
    }
}
