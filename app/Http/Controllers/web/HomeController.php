<?php

namespace App\Http\Controllers\web;

use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['blogs']=Blog::select('id','hint1','hint2','authorname','created_at')->get();
        //dd($data);
        return view('web.home.index')->with($data);
    }
   

}
