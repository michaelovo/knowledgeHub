@extends('layouts.admin.app')

@section('headSection')
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Advanced Form Elements
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Advanced Elements</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Tags</h3>

        <div class="box-tools pull-right">
          <a class="btn btn-success" href="{{route('tags.create')}}">Add New </a>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>
                    <th>Sn</th>
                    <th>name</th>
                    <th>Slug</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  @foreach($tags as $tag)

                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$tag->name}}</td>
                    <td>{{$tag->slug}}</td>
                    <td>Edit ||

                      Delete</td>
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
          <!-- /.col -->
        </div>
   <!-- /.row -->
 </section>
</div>
 <!-- /.content -->

@endsection

@section('footerSection')

<!-- DataTables -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection
