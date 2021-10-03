@extends('admin.layout')
@section('main')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Editpage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit linkpage</li>
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
                <h3 class="card-title">Edit Links</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @include('admin.inc.message')
              <form action="{{url("dashboard/links/update/$setting->id")}}" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" name="facebook" value="{{$setting->facebook}}" class="form-control" id="exampleInputEmail1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" name="twitter" value="{{$setting->twitter}}" class="form-control" id="exampleInputEmail1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Github</label>
                    <input type="text" name="github" value="{{$setting->github}}" class="form-control" id="exampleInputEmail1" >
                  </div>
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
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