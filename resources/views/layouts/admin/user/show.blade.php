@extends('layouts.admin.app')
@section('headSection')
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layouts.includes.headermsg')

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Users</h3>

          <a class="col-lg-offset-5 btn btn-success" href="{{route('user.create')}}">Add New </a>
          @include('layouts.includes.err_msg')
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                  <div class="box-header">
                    <!--h3 class="box-title">Data Table With Full Features</h3-->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">

                      <thead>
                      <tr>
                        <th>Sn</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Assigned Roles</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                      </tr>
                      </thead>
                      @foreach($users as $user)

                      <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                          <!-- To display all users roles to 'use/show.blade'
                            '$user' frm the outer loop, 'roles'
                          -->
                          @foreach($user->roles as $role)
                          {{$role->name}}<p></p>
                          @endforeach
                        </td>
                        <td>{{$user->status? 'Active' :'Inactive'}}</td>
                        <!--If status value ='1' then active, else 'inactive'-->
                        <td>{{$user->created_at}}</td>
                        <td>
                      <a href="{{route('user.edit',$user->id)}}" class="fa fa-edit text-blue"></a>

                        <form id="delete-form-{{$user->id}}" method="post" action="{{route('user.destroy',$user->id)}}" style="display:none;">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                        </form>
                          <a href="{{route('user.destroy',$user->id)}}" class="fa fa-fw fa-trash text-red"
                            onclick="if(confirm('Are You Sure You Want To Delete this ?'))
                            {
                              event.preventDefault();
                              document.getElementById('delete-form-{{$user->id}}').submit();
                            }
                            else{
                              event.preventDefault();
                            }">
                          </a>
                          </td>
                      </tr>
                      @endforeach

                      </tbody>


                      <!--tfoot>
                      <tr>
                        <th>Sn</th>
                        <th>name</th>
                        <th>Slug</th>
                        <th>Actions</th>

                      </tr>
                    </tfoot-->

                    </table>
                  </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

        </div>

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   @endsection
   @section('footerSection')

     <!-- DataTables -->
   <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
   <script>
     $(function () {
       $('#example1').DataTable()
/*
       $('#example2').DataTable({
         'paging'      : true,
         'lengthChange': false,
         'searching'   : false,
         'ordering'    : true,
         'info'        : true,
         'autoWidth'   : false
       })
       */
     })
   </script>
   @endsection
