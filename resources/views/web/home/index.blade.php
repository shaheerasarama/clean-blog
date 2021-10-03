@extends('web.layout')

@section('main')

<header class="masthead" style="background-image: url({{asset('web/assets/img/home-bg.jpg')}})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">Start Blogging Now!</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach($blogs as $blog)
                    <div class="post-preview">
                        
                        <a href="{{("/blog/$blog->id")}}">
                            <h2 class="post-title">{{$blog->hint1}}</h2>
                            <h3 class="post-subtitle">{{$blog->hint2}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{$blog->authorname}}</a>
                            on {{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}
                           
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    @endforeach
                  
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>

        
@endsection