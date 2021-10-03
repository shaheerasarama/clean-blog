@extends('admin.layout')
@section('main')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Updatepage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Blog</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
       
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @include('admin.inc.message')
              <form method="post" action="{{url("dashboard/update/blog/$blog->id")}}" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hint 1</label>
                    <input type="text" name="hint1" value="{{$blog->hint1}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Hint 2</label>
                    <input type="text" name="hint2" value="{{$blog->hint2}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Desc 1</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="desc1" cols="90" rows="10" value="">{{$blog->desc1}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Desc 2</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="desc2" cols="90" rows="10" value="">{{$blog->desc2}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Desc 3</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="desc3" cols="90" rows="10" value="">{{$blog->desc3}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Desc 4</label>
                    <textarea class="form-control" id="exampleInputEmail1" name="desc4" cols="90" rows="10" value="">{{$blog->desc4}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Author Name</label>
                    <input type="text" name="authname" value="{{$blog->authorname}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Img</label>
                    <input type="file" name="postimg" class="form-control" id="exampleInputEmail1">
                    <br>
                    <img src="{{asset("uploads/$blog->postimg")}}" width="300px">
                  </div>
                  <hr>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Img</label>
                    <input type="file" name="blogimg" class="form-control" id="exampleInputEmail1">
                    <br>
                    <img src="{{asset("uploads/$blog->blogimg")}}" width="300px">
                  </div>

           
                
                
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
@endsection