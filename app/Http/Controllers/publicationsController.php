<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use Illuminate\Http\Request;

class publicationsController extends Controller
{
    public function index()
    {
        $publications = Publications::all();
        // dd($publications);
        return view('landing.publications', compact('publications'));
    }

    public function getArticle($id)
    {
        $publications = Publications::find($id);
        $publications->update([
            'tab_content' => $publications->tab_content + 1
        ]);

        return view('landing.article', compact('publications'));
    }

    public function search(Request $request)
    {
        $keyword = $request->find;

        $publications = Publications::where('title', 'LIKE', '%' . $keyword . '%')->orWhere('content', 'LIKE', '%' . $keyword . '%')->get();

        return view('landing.publications', compact('publications'));
    }
}
