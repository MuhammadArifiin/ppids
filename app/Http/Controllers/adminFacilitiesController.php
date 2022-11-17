<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class adminFacilitiesController extends Controller
{
    public function index()
    {
        $facilities = Facilities::all();
        return view('admin.facilities', compact('facilities'));
    }

    public function create()
    {
        $facilities = Facilities::all();
        return view('admin.addFac', compact('facilities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|max:1500|mimes:png,jpg'
        ]);

        $data = new Facilities();
        $data->name = $request->input('name');
        $data->image = $request->file('image')->store('asset/facilities', 'public');
        $data->description = $request->input('description');
        $data->save();

        Alert::success('success', 'Tambah data berhasil');
        return redirect()->to('/admin-facilities');
    }

    public function edit($id)
    {
        $facilities = Facilities::find($id);
        return view('admin.editFac', compact('facilities'));
    }

    public function update(Request $request, $id)
    {


        $facilities = Facilities::find($id);
       
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'max:1500|mimes:png,jpg'
        ]);


        if($request->file('image')){
            Storage::disk('local')->delete('public/'. $facilities->image);
            $facilities->image = $request->file('image')->store('asset/facilities', 'public');
            
        }
        $facilities->name = $request->name;
        $facilities->description = $request->description;
        $facilities->update();

        Alert::success('success', 'Edit data berhasil');
        return redirect()->to('/admin-facilities');
    }


    public function delete($id)
    {
        $data = Facilities::find($id);
        Storage::disk('local')->delete('public/'. $data->image);
        $data->delete();

        Alert::success('success', 'Hapus data berhasil');
        return redirect()->to('/admin-facilities');
    }
}
