<?php

namespace App\Http\Controllers;

use App\Models\travel;

class Homecontroller extends Controller
{
    public function index(){
        $travels = Travel::all();
        // dd($travels);
        return view('home', compact('travels'));
    }
}
