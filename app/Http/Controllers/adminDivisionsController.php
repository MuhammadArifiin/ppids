<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class adminDivisionsController extends Controller
{
    public function index()
    {
        $divisions = Divisions::all();
        return view('admin.divisions', compact('divisions'));
    }

    public function create()
    {
        $divisions = Divisions::all();
        return view('admin.addDiv', compact('divisions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'division' => 'required',
            'employee' => 'required'
        ]);

        $divisions = new Divisions();
        $divisions->division = $request->input('division');
        $divisions->employee = $request->input('employee');
        $divisions->save();

        Alert::success('success', 'Tambah data berhasil');
        return redirect()->to('/admin-divisions');
    }

    public function edit($id){
        $divisions = Divisions::find($id);
        return view('admin.editDiv', compact('divisions'));
    }

    public function update(Request $request, $id)
    {
        $divisions = Divisions::find($id);

        $divisions->division = $request->division;
        $divisions->employee = $request->employee;
        $divisions->save();

        Alert::success('success', 'Edit data berhasil');
        return redirect()->to('/admin-divisions');
    }

    public function delete($id)
    {
        $data = Divisions::find($id);
        $data->delete();

        Alert::success('success', 'Hapus data berhasil');
        return redirect()->to('/admin-divisions');
    }
}
