<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function show()
    {
        //echo "hi";
        $data['contact']=Contact::get();
        //dd($data);
        return view('admin.contact.show')->with($data);
    }

   

    public function delete($id)
    {
        $contact=Contact::FindOrFail($id);
        $contact->delete();
        return back();
    }
}
