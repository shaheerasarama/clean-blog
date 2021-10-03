<?php

namespace App\Http\Controllers\web;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function show()
    {
        return view('web.contact.show');
    }

    public function storage(Request $request)
    {

        //dd($request->all());
        $request->validate([
            'name'=>'required|min:5|string',
            'email'=>'required|string|email',
            'phone'=>'required',
            'message'=>'required|string|min:5',
        ]);

        Contact::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ]);

        $request->session()->flash('sent','message sent succesfuly');
        return back();

           

        
    }
}
