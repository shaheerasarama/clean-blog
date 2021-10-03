@extends('admin.layout')
@section('main')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Homepage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Blog</li>
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
        @include('admin.inc.message')
              <div class="card-header">
                <h3 class="card-title">Add Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <form method="post" action="{{url('dashboard/storeblog')}}" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hint 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="hint1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Hint 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="hint2">
                  </div>

                  <label for="exampleInputPassword1">Desc 1</label>
                  <div class="form-group">
                   <textarea name="desc1" id="" cols="60" rows="10"></textarea>
                  </div>

                  <label for="exampleInputPassword1">Desc 2</label>
                  <div class="form-group">
                   <textarea name="desc2" id="" cols="60" rows="10"></textarea>
                  </div>

                  <label for="exampleInputPassword1">Desc 3</label>
                  <div class="form-group">
                   <textarea name="desc3" id="" cols="60" rows="10"></textarea>
                  </div>

                  <label for="exampleInputPassword1">Desc 4</label>
                  <div class="form-group">
                   <textarea name="desc4" id="" cols="60" rows="10"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Author Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="authname">
                  </div>

                  

                  <div class="form-group">
                    <label for="exampleInputFile">Blog img</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="blogimg" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Post img</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="postimg" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
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