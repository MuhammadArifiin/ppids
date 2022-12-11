<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminManageContact extends Controller
{
    public function index()
    {
        $data = Contact::get();
        return view('admin.contact', compact('data'));
    }

    public function create(){
        return view('admin.addCon');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $data = new Contact();
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->save();

        Alert::success('success', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admin-manage-contact');
    }

    public function edit($id){
        $data = Contact::find($id);
        return view('admin.editCon', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Contact::find($id);
        $request->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->update();

        Alert::success('success', 'Data Berhasil Diperbarui');
        return redirect()->to('/admin-manage-contact');
    }

    public function delete($id) {
        $data = Contact::find($id);
        $data->delete();

        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->to('/admin-manage-contact');
    }
}
