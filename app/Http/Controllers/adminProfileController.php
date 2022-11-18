<?php

namespace App\Http\Controllers;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminProfileController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $aatr = $request->all();

        if ($request->password) {
            $aatr['password'] =  bcrypt($request->password);
        } else {
            unset($aatr['password']);
        }

        $data = User::find(Auth::user()->id);
        $request->validate([
            'name' => 'required',
            'email' =>  'required| unique:users,email,' . $data->id,
        ]);

        $data->update($aatr);
        Alert::success('success', 'Data updated successfully');
        return redirect()->to('/admin-profile');
    }
}
