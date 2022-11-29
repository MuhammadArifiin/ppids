<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class adminDivisionsController extends Controller
{
    public function index()
    {
        $divisions = Divisions::paginate(10);
        return view('admin.divisions', compact('divisions'));
    }

    public function create()
    {
        return view('admin.addDiv');
    }

    public function store(Request $request)
    {
        $request->validate([
            'division' => 'required',
            'employee' => 'required',
            'image' => 'required|max:1500|mimes:png,jpg'
        ]);

        $data = new Divisions();
        $data->division = $request->input('division');
        $data->image = $request->file('image')->store('asset/divisions', 'public');
        $data->employee = $request->input('employee');
        $data->save();

        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin-divisions');
    }

    public function edit($id)
    {
        $divisions = Divisions::find($id);
        return view('admin.editDiv', compact('divisions'));
    }

    public function update(Request $request, $id)
    {
        $divisions = Divisions::find($id);
        $request->validate([
            'division' => 'required',
            'employee' => 'required',
            'image' => 'max:1500|mimes:png,jpg'
        ]);

        if ($request->file('image')) {
            Storage::disk('local')->delete('public/' . $divisions->image);
            $divisions->image = $request->file('image')->store('asset/divisions', 'public');
        }

        $divisions->division = $request->division;
        $divisions->employee = $request->employee;
        $divisions->update();

        Alert::success('success', 'Data Berhasil Diperbarui');
        return redirect()->to('/admin-divisions');
    }

    public function delete($id)
    {
        $data = Divisions::find($id);
        Storage::disk('local')->delete('public/' . $data->image);
        $data->delete();

        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->to('/admin-divisions');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        $divisions = Divisions::where('division', 'LIKE', '%' . $keyword . '%')->orWhere('employee', 'LIKE', '%' . $keyword . '%')->paginate(10);

        return view('admin.divisions', compact('divisions'));
    }
}
