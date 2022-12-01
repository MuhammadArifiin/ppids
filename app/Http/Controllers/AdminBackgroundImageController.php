<?php

namespace App\Http\Controllers;

use App\Models\backgroundImageInHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBackgroundImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $backgroundImages = backgroundImageInHome::paginate();
        return view('admin.backgroundImage', compact('backgroundImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addBackgroundImage');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        $aatr = $request->all();
        $aatr['image'] =  $request->file('image')->store('asset/backgroundImage', 'public');
        backgroundImageInHome::create($aatr);
        Alert::success('success', 'Data Berhasil Ditambah');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = backgroundImageInHome::find($id);
        return view('admin.editbackgroundImage',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aatr =  $request->all();
        $data = backgroundImageInHome::find($id);
        if ($request->file('image')) {
            Storage::disk('local')->delete('public/' . $data->image);
            $aatr['image'] =  $request->file('image')->store('asset/backgroundImage', 'public');
        }

        $data->update($aatr);
        Alert::success('success', 'Data Berhasil Diperbarui');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = backgroundImageInHome::find($id);
        Storage::disk('local')->delete('public/' . $data->image);
        $data->delete();
        Alert::success('success', 'Data Berhasil Dihapus');
        Alert::success('success', 'Data Berhasil Diperbarui');
        return redirect()->back();
    }
}
