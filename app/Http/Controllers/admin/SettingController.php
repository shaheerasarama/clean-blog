<?php

namespace App\Http\Controllers\admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function show()
    {
        $data['setting']=Setting::get()->first();
        //dd($data);
        return view('admin.links.show')->with($data);
    }

    public function store(Request $request)
    {

        $request->validate([

            'facebook'=>'required|string|max:50',
            'twitter'=>'required|string|max:50',
            'github'=>'required|string|max:50',
        ]);

        Setting::create([

            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'github'=>$request->github,
        ]);

        $request->session()->flash('msg','row added succesfuly');
        return back();
        //return back();
    }

    public function edit($id)
    {
        $data['setting']=Setting::FindOrFail($id);
        return view('admin.links.edit')->with($data);
    }

    public function update($id,Request $request)
    {
        $links=Setting::FindorFail($id);

        $request->validate([

            'facebook'=>'required|string|max:50',
            'twitter'=>'required|string|max:50',
            'github'=>'required|string|max:50',
        ]);
        
         $links->update([

         'facebook'=>$request->facebook,
         'twitter'=>$request->twitter,
         'github'=>$request->github,
     ]);
          return bacK();
 }

    public function delete($id)
    {
        $setting=Setting::FindOrFail($id);
        $setting->delete();
        return back();
    }
}
