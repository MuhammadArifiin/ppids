<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class adminPublicationsController extends Controller
{
    public function index()
    {
        $publications = Publications::paginate(10);
        return view('admin.publications', compact('publications'));
    }

    public function create()
    {
        return view('admin.addPub');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|max:1500|mimes:png,jpg',
        ]);

        $data = new Publications();
        $data->date = $request->input('date');
        $data->author = Auth::user()->name;
        $data->title = $request->input('title');
        $data->content = $request->input('content');
        $data->image = $request->file('image')->store('asset/publication', 'public');
        $data->save();

        Alert::success('success', 'Data Berhasil Ditambahkan');
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

        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'max:1500|mimes:png,jpg',
        ]);

        if ($request->file('image')) {
            Storage::disk('local')->delete('public/' . $publications->image);
            $publications->image = $request->file('image')->store('asset/publication', 'public');
        }

        $publications->date = $request->date;
        $publications->author = Auth::user()->name;
        $publications->title = $request->title;
        $publications->content = $request->content;
        $publications->update();

        Alert::success('success', 'Data Berhasil Diperbarui');
        return redirect()->to('/admin-publications');
    }

    public function delete($id)
    {
        $data = Publications::find($id);
        Storage::disk('local')->delete('public/' . $data->image);
        $data->delete();

        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->to('/admin-publications');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        $publications = Publications::where('title', 'LIKE', '%' . $keyword . '%')->orWhere('content', 'LIKE', '%' . $keyword . '%')->paginate(10);
        
        return view('admin.publications', compact('publications'));
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
