<?php

namespace App\Http\Controllers\web;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show($id)
    {
       // echo $id;
       $data['blog']=Blog::FindOrFail($id);
       
       return view('web.blog.show')->with($data);
    }
}
