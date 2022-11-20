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
        $facilities = Facilities::paginate(10);
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

        Alert::success('success', 'Data added successfully');
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

        if ($request->file('image')) {
            Storage::disk('local')->delete('public/' . $facilities->image);
            $facilities->image = $request->file('image')->store('asset/facilities', 'public');
        }
        $facilities->name = $request->name;
        $facilities->description = $request->description;
        $facilities->update();

        Alert::success('success', 'Data updated successfully');
        return redirect()->to('/admin-facilities');
    }

    public function delete($id)
    {
        $data = Facilities::find($id);
        Storage::disk('local')->delete('public/' . $data->image);
        $data->delete();

        Alert::success('success', 'Data deleted successfully');
        return redirect()->to('/admin-facilities');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        $facilities = Facilities::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('description', 'LIKE', '%' . $keyword . '%')->paginate(10);

        return view('admin.facilities', compact('facilities'));
    }
}
