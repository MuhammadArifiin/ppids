<?php

namespace App\Http\Controllers;

use App\Models\ManageFeature;
use Illuminate\Http\Request;

class AdminManageFeatureController extends Controller
{
  public function index()
  {
    $getAllManageFeature = ManageFeature::get();
    return view('admin.ManageFeature', compact(['getAllManageFeature']));
  }


  public function changeActivity($id)
  {
    $data = ManageFeature::find($id);
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
