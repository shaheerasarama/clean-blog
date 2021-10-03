<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        //$data['blogs']=Blog::get();
        return view('admin.home.index');
    }
}
