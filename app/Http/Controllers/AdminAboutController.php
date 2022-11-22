<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAboutController extends Controller
{
    public function index(){
     
      $countAbout = about::count();

   
      if($countAbout > 0){
        $last = about::all()->last();
        $item = about::findOrfail($last->id);
      
        return view('admin.about', compact(['countAbout', 'item']));
      }else{
      
        return view('admin.about', compact('countAbout') );
      }
      
    }

    public function createOrUpdate(Request $request){
    
        $countAbout = about::count();
        $request->validate([
            'image' => 'max:1500|mimes:png,jpg',
            'about' => 'required',
          ]);
        
        if($countAbout > 0){
            $last = about::all()->last();
            $item = about::findOrfail($last->id);

     

        $aatr = $request->all();
            
        if ($request->file('image')) {
            Storage::disk('local')->delete('public/' . $item->image);
            $aatr['image']=  $request->file('image')->store('asset/about', 'public');
        }

        $item->update($aatr);
        return back();
            
        }else{
          $request->validate([
            'image' => 'required|max:1500|mimes:png,jpg',
            'about' => 'required',
          ]);

          $aatr = $request->all();
          $aatr['image'] = $request->file('image')->store('asset/about', 'public');
          about::create($aatr);
          return back();
        
    }
    }
}
