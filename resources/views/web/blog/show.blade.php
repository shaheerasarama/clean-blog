@extends('web.layout')
@section('main')
<header class="masthead" style="background-image: url({{asset("uploads/$blog->postimg")}})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>{{$blog->hint1}}</h1>
                            <h2 class="subheading">{{$blog->hint2}}</h2>
                            <span class="meta">
                                Posted by
                                <a href="#!">{{$blog->authorname}}</a>
                                on {{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>{{$blog->desc1}}</p>
                       
                        <p>{{$blog->desc2}}</p>
                        
                        <p>{{$blog->desc3}}</p>
                        <a href="#!"><img class="img-fluid" src="{{asset("uploads/$blog->blogimg")}}" alt="..." /></a>
                        
                        <p>{{$blog->desc4}}</p>
                           
                        </p>
                    </div>
                </div>
            </div>
        </article>
@endsection