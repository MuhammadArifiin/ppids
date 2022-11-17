<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class adminPublicationsController extends Controller
{
    public function index()
    {
        $publications = Publications::all();
        return view('admin.publications', compact('publications'));
    }

    public function create()
    {
        $publications = Publications::all();
        return view('admin.addPub', compact('publications'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'author' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $data = new Publications();
        $data->date = $request->input('date');
        $data->author = $request->input('author');
        $data->title = $request->input('title');
        $data->content = $request->input('content');
        $data->save();

        Alert::success('success', 'Tambah data berhasil');
        return redirect()->to('/admin-publications');
    }

    public function edit($id)
    {
        $publications = Publications::find($id);
        return view('admin.editPub', compact('publications'));
    }

    public function update(Request $request, $id)
    {
        $publications = Publications::find($id);

        $publications->date = $request->date;
        $publications->author = $request->author;
        $publications->title = $request->title;
        $publications->content = $request->content;
        $publications->save();

        Alert::success('success', 'Edit data berhasil');
        return redirect()->to('/admin-publications');
    }


    public function delete($id)
    {
        $data = Publications::find($id);
        $data->delete();

        Alert::success('success', 'Hapus data berhasil');
        return redirect()->to('/admin-publications');
    }
}
