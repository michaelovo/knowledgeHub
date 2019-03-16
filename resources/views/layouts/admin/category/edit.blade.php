@extends('layouts.admin.app')

 @section('headSection')
 <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
 @endsection


@section('main-content')

<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('layouts.includes.headermsg')
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
        <form role="form" action="{{route('category.update',$category->id)}}" method="post">
          {{csrf_field()}}
          {{method_field('PATCH')}}

        <div class="box-body">
          <div class="row">
            <div class="col-lg-offset-3 col-lg-5">


              <!-- Category title-->
          <div class="form-group">
            <label for="title">Category title</label>
            <input type="text" class="form-control" id="title" name ="name"
            value="{{$category->name}}" placeholder="Category title">
          </div>
          <!--/Category title-->

          <!-- Category slug-->
          <div class="form-group">
            <label for="slug">Category Slug</label>
            <input type="text" class="form-control" id="slug" name ="slug"
            value="{{$category->slug}}" placeholder="Enter tag slug">
          </div>
          <!--/Category slug -->


            </div>
            <!-- /.col -->
                    </div>

        <div class="col-lg-offset-3 box-footer ">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-warning" href="{{route('category.index')}}">Back </a>
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
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

@endsection
