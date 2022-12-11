<?php

namespace App\Http\Controllers;

use App\Models\Socmed;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminManageSocmed extends Controller
{
    public function index()
    {
        $data = Socmed::get();
        return view('admin.socmed', compact('data'));
    }

    public function create()
    {
        return view('admin.addSoc');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required'
        ]);

        $data = new Socmed();
        $data->name = $request->input('name');
        $data->link = $request->input('link');
        $data->active = false;
        $data->save();

        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin-manage-socmed');
    }

    public function edit($id)
    {
        $data = Socmed::find($id);
        return view('admin.editSoc', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Socmed::find($id);
        $request->validate([
            'name' => 'required',
            'link' => 'required'
        ]);

        $data->name = $request->input('name');
        $data->link = $request->input('link');
        $data->update();

        Alert::success('success', 'Data Berhasil Diperbarui');
        return redirect()->to('/admin-manage-socmed');
    }

    public function delete($id)
    {
        $data = Socmed::find($id);
        $data->delete();

        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->to('/admin-manage-socmed');
    }

    public function changeActiveSocmed($id)
    {
        $data = Socmed::find($id);
        if ($data->active == 1) {
            $data->update([
                'active' => 0,
            ]);
        } else {
            $data->update([
                'active' => 1,
            ]);
        }
        return redirect()->back();
    }
}
