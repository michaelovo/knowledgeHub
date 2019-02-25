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
          <h3 class="box-title">Select2</h3>
        </div>
        <!-- /.box-header -->

        @include('layouts.includes.err_msg')

          <!-- form-->
        <form role="form" action="{{route('user.store')}}" method="post">
          {{csrf_field()}}

        <div class="box-body">
          <div class="row">
            <div class="col-lg-offset-3 col-md-4">


              <!-- User Name-->
          <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" id="name" name ="name" placeholder="user name">
          </div>
          <!--/User Name-->

          <!-- Email-->
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name ="email" placeholder="user email">
          </div>
          <!--/Email -->

          <!-- Password-->
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name ="password" placeholder="user password">
          </div>
          <!--/Password -->

          <!-- Confirm Password-->
          <div class="form-group">
            <label for="Cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="Cpassword" name ="Cpassword" placeholder="Confirm password">
          </div>
          <!--/Confirm Password -->

          <!-- Assign Role-->
          <div class="form-group">
            <label for="role">Assign Role</label>
            <select class="form-control" id="role" name ="role">
              <option value="0">Editor</option>
              <option value="1">Publisher</option>
              <option value="2">Writer</option>
            </select>
          </div>
          <!--/Assign Role -->

            </div>
            <!-- /.col -->
                    </div>

        <div class="col-lg-offset-3 col-lg-5 box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>

                  <a class="btn btn-warning" href="{{route('user.index')}}">Back </a>
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
