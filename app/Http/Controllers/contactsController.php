<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class contactsController extends Controller
{
    public function index()
    {
        $contacts = Contacts::all();
        return view('landing.modal', compact('contacts'));
    }
}
