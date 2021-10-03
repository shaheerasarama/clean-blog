<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class BlogController extends Controller
{
    public function index()
    {
        $data['blogs']=Blog::get();
        return view('admin.blog.index')->with($data);
    }

    public function add()
    {
        return view('admin.blog.add');
    }

    public function store(Request $request)
    {
      //dd($request->all());
      $request->validate([

            
        'hint1'=>'required|string|max:200',
        'hint2'=>'required|string|max:200',
        'desc1'=>'required|string|max:5000',
        'desc2'=>'required|string|max:5000',
        'desc3'=>'string|max:5000',
        'desc4'=>'string|max:5000',
        'blogimg'=>'required|image',
        'postimg'=>'required|image',
        'authname'=>'required|max:30',

    ]);

    //$bbb=$request->blogimg;
    //dd($bbb);

    $file = request()->file('blogimg');
    //dd($file);
    $new=$file->store('blog', ['disk' => 'uploads']);

    $file2= request()->file('postimg');
    $new2=$file2->store('blog', ['disk' => 'uploads']);
  
    
   
   
   
    Blog::create([
  
        'hint1'=>$request->hint1,
        'hint2'=>$request->hint2,
        'desc1'=>$request->desc1,
        'desc2'=>$request->desc2,
        'desc3'=>$request->desc3,
        'desc4'=>$request->desc4,
        'authorname'=>$request->authname,
        'blogimg'=>$new,
        'postimg'=>$new2,

    ]);
    $request->session()->flash('msg','row added succesfuly');
    return back();
    }

    public function edit($id)
    {
       $data['blog']=Blog::FindOrFail($id);
       //dd($blog);
       return view('admin.blog.edit')->with($data);
    }


    public function update($id,Request $request)
    {
       $blog=Blog::FindOrFail($id);
      // dd($blog);
        $request->validate([

         'hint1'=>'required|string|max:200',
         'hint2'=>'required|string|max:200',
         'desc1'=>'required|string|max:5000',
         'desc2'=>'required|string|max:5000',
         'desc3'=>'required|string|max:5000',
         'desc4'=>'required|string|max:5000',
         'authname'=>'required|string|max:30',
         ]);

        
        if($request->hasfile('postimg'))
        {
            $postimg='uploads/'.$blog->postimg;
            File::delete($postimg);
            $file2= request()->file('postimg');
            $new2=$file2->store('blog', ['disk' => 'uploads']);
            $blog->update([

                'postimg'=>$new2,
            ]);
            
        }

       

        if($request->hasfile('blogimg'))
        {
            $blogimg='uploads/'.$blog->blogimg;
            File::delete($blogimg);
            $file2= request()->file('blogimg');
            $blogimgedit=$file2->store('blog', ['disk' => 'uploads']);
            $blog->update([

                'blogimg'=>$blogimgedit,
            ]);
            

        }

        
        $blog->update([
         'hint1'=>$request->hint1,
         'hint2'=>$request->hint2,
         'desc1'=>$request->desc1,
         'desc2'=>$request->desc2,
         'desc3'=>$request->desc3,
         'desc4'=>$request->desc4,
         'authorname'=>$request->authname, 
         //'postimg'=>$new2,
         //'blogimg'=>$blogimgedit,
         

        ]);

    $request->session()->flash('msg','row updated succesfuly');
    return back();


    }


    public function delete($id)
    {
    

        $blog = Blog::FindOrFail($id);
        
       
        unlink("uploads/".$blog->blogimg);
        unlink("uploads/".$blog->postimg);
        

        Blog::where("id", $blog->id)->delete();
        

       
        return back();
    }

}
