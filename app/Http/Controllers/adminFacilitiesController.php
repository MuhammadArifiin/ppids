<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;
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
            'description' => 'required'
        ]);

        $data = new Facilities();
        $data->name = $request->input('name');
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

        $facilities->name = $request->name;
        $facilities->description = $request->description;
        $facilities->save();

        Alert::success('success', 'Edit data berhasil');
        return redirect()->to('/admin-facilities');
    }


    public function delete($id)
    {
        $data = Facilities::find($id);
        $data->delete();

        Alert::success('success', 'Hapus data berhasil');
        return redirect()->to('/admin-facilities');
    }
}
