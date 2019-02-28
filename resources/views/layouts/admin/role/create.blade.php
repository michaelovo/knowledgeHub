@extends('layouts.admin.app')

 @section('headSection')
 <!-- Select2 -->
  <!--link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}"-->
 @endsection


@section('main-content')

<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
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
    <!-- Content Header (Page header) -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Roles</h3>
        </div>
        <!-- /.box-header -->

        @include('layouts.includes.err_msg')

          <!-- form-->
        <form role="form" action="{{route('role.store')}}" method="post">
          {{csrf_field()}}

        <div class="box-body">
          <div class="row">
            <div class="col-lg-offset-3 col-md-6">

              <!-- Role Name-->
          <div class="form-group">
            <label for="title">Role Name</label>
            <input type="text" class="form-control" id="title" name ="name" placeholder="Role Name">
          </div>
          <!--/Role Name-->

          <div class="row"><!-- Permissions row--->

            <div class="col-lg-4"><!--Posts Permissions --->
              <label for="permission_for">Posts Permission </label>
                  @foreach($permissions as $permission)
                      @if($permission->permission_for == 'post')
                <div class="checkbox">
                    <label><input type="checkbox" value="{{$permission->id}}">
                        {{$permission->name}}</label>
                </div>
                @endif
                @endforeach
            </div>  <!--/Posts Permissions --->


            <div class="col-lg-4"><!--User Permission --->
              <label for="permission_for">User Permissions </label>
                  @foreach($permissions as $permission)
                      @if($permission->permission_for == 'user')
                <div class="checkbox">
                    <label><input type="checkbox" value="{{$permission->id}}">
                        {{$permission->name}}</label>
                </div>
                @endif
                @endforeach
            </div>  <!--/User Permissions --->


            <div class="col-lg-4"><!--other Permissions --->
              <label for="permission_for">Other Permission </label>
                  @foreach($permissions as $permission)
                      @if($permission->permission_for == 'other')
                <div class="checkbox">
                    <label><input type="checkbox" value="{{$permission->id}}">
                        {{$permission->name}}</label>
                </div>
                @endif
                @endforeach
            </div>  <!--/other Permissions --->
          </div><!-- / Permissions row--->


            </div>  <!-- /.col -->
          </div>

        <div class="col-lg-offset-3 col-lg-5 box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>

                  <a class="btn btn-warning" href="{{route('role.index')}}">Back </a>
            </div>


          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <!-- /editor ends -->

      </form>
      </div>
      <!-- /.box -->
    </section>
  </div>
@endsection

@section('footerSection')
<!-- Select2 -->
<!--script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script-->

@endsection
