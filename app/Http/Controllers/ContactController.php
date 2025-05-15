<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        return view('contact');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string'
        ])
        
    }
    post::create([

    ])
    //
}
