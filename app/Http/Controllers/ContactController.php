<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        return view('contact');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string'
            
        ]);
        
    
     Contact::create([
      'name'=>$request->name, 
      'email'=>$request->email,
      'subject'=>$request->subject,
      'message' =>$request->message

    ]);
    return redirect()->back()->with('success', 'Message sent successfully');
}
    //
}
