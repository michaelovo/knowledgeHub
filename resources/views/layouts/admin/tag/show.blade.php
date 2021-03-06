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
          <h3 class="box-title">Tags</h3>
          <a class="col-lg-offset-5 btn btn-success" href="{{route('tags.create')}}">Add New </a>
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
                        <th>Slug</th>
                        <th>Created</th>
                        <th>Actions</th>
                      </tr>
                      </thead>
                      @foreach($tags as $tag)

                      <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->slug}}</td>
                        <td>{{$tag->created_at}}</td>
                        <td>
                      <a href="{{route('tags.edit',$tag->id)}}" class="fa fa-edit text-blue"></a>

                        <form id="delete-form-{{$tag->id}}" method="post" action="{{route('tags.destroy',$tag->id)}}" style="display:none;">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                        </form>
                          <a href="{{route('tags.destroy',$tag->id)}}" class="fa fa-fw fa-trash text-red"
                            onclick="if(confirm('Are You Sure You Want To Delete this ?'))
                            {
                              event.preventDefault();
                              document.getElementById('delete-form-{{$tag->id}}').submit();
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
