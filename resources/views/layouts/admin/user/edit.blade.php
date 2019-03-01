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
          <h3 class="box-title">Update Admin</h3>
        </div>
        <!-- /.box-header -->

        @include('layouts.includes.err_msg')

          <!-- form-->
        <form role="form" action="{{route('user.update',$users->id)}}" method="post">
          {{csrf_field()}}
            {{method_field('PATCH')}}
        <div class="box-body">
          <div class="row">
            <div class="col-lg-offset-3 col-md-4">


              <!-- User Name-->
          <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" id="name" name ="name" placeholder="user name"
            value="@if(old('name')){{old('name')}}@else{{$users->name}}@endif">
          </div>
          <!--/User Name-->

          <!-- Email-->
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name ="email" placeholder="user email"
            value="@if(old('email')){{old('email')}}@else{{$users->email}}@endif">
          </div>
          <!--/Email -->

          <!-- phone-->
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" name ="phone" placeholder="user phone"
              value="@if(old('phone')){{old('phone')}}@else{{$users->phone}}@endif">
          </div>
          <!--/phone -->

        

          <!--status -->
          <div class="checkbox">
            <label><input type="checkbox" name ="status" value="1"
              @if (old('status')==1 || $users->status ==1) checked @endif> status </label>
        </div>
        <!--status -->

          <!-- Assign Role-->
          <div class="form-group">
            <label>Assign Roles </label>
            <div class="row">
             @foreach($roles as $role)
                <div class="col-lg-3">
                  <div class="checkbox"><!--'role[]'allows users to be assign more than one role as selected --->
                    <label><input type="checkbox" name ="role[]" value="{{$role->id}}">
                      {{$role->name}}
                    </label>
                </div>
              </div>
              @endforeach
          </div>


            </div>
            <!-- /.col -->
                    </div>

        <div class="col-lg-offset-3 col-lg-5 box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>

                  <a class="btn btn-warning" href="{{route('user.index')}}">Back </a>
            </div>

          </div>  <!--/Assign Role -->


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
