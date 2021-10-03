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
              <li class="breadcrumb-item active">All Blog</li>
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
        <div class="card-body table-responsive p-0">
                <table class="table table-hover ">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Hint 1</th>
                      <th>Hint 2</th>
                      <th>Desc 1</th>
                      <th>Desc 2</th>
                      <th>Desc 3</th>
                      <th>Desc 4</th>
                      <th>Author Name</th>
                      <th>Post Img</th>
                      <th>Blog Img</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($blogs as $blog)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$blog->hint1}}</td>
                      <td>{{$blog->hint2}}</td>
                      <td>{{$blog->desc1}}</td>
                      <td>{{$blog->desc2}}</td>
                      <td>{{$blog->desc3}}</td>
                      <td>{{$blog->desc4}}</td>
                      <td>{{$blog->authorname}}</td>
                     
                      <td><img src="{{asset("uploads/$blog->postimg")}}" width="150px"></td>
                      <td><img src="{{asset("uploads/$blog->blogimg")}}" width="150px"></td>

                      <td>
                      <a href="{{url("dashboard/edit/blog/$blog->id")}}" class="btn btn-info">
                      <i class="fas fa-edit"></i>
                      </a>
                    </td>
                    
                      <td>
                      <a href="{{url("dashboard/delete/blog/$blog->id")}}" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                      </a>
                      </td>

                      
                    </tr>

                    @endforeach
                  </tbody>
                </table>
                
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

