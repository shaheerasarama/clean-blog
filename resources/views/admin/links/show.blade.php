@extends('admin.layout')
@section('main')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Linkspage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">links page</li>
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
       
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Links table</h3>
               
                <div class="card-tools">
                <div>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Add links
               </button>

              </div>
                </div>
              </div>
              @include('admin.inc.message')
            
             
              <!-- /.card-header -->
              @if($setting!=null)
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                
                    <tr>
                      
                      <th>Facebook</th>
                      <th>Twitter</th>
                      <th>Github</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                
                    <tr>
                     
                      <td>
                          {{$setting->facebook}}
                       </td>

                       <td>
                          {{$setting->twitter}}
                       </td>

                       <td>
                          {{$setting->github}}
                       </td>
                     
                      <td>  
                      <a href="{{url("dashboard/links/delete/$setting->id")}}" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                      </a>

                      <a href="{{url("dashboard/links/edit/$setting->id")}}" class="btn btn-info">
                      <i class="fas fa-edit"></i>
                      </a>
                    </td>
                    </tr>
                    
                    </form>
                  </tbody>
                </table>
              </div>
              @else
              <p>there is no links,please add some</p>
              @endif
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        </div>
        <!-- /.row -->
     <!-- /.container-fluid -->
    
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

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add links</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              @if($setting!=null)
              
               <p>you can not add any links,to add ones please <a href="{{url("dashboard/links/delete/$setting->id")}}">delete</a> some links</p>
              
                    

               @else
              <form action="{{url('dashboard/links/store')}}" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                   
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Github</label>
                    <input type="text" name="github" class="form-control" id="exampleInputEmail1" >
                  </div>
               
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endif
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

@endsection