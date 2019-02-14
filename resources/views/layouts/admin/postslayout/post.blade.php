@extends('layouts.admin.app')

 @section('headSection')
 <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">

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
          <form role="form" action="{{route('post.store')}}" method="post">
            {{csrf_field()}}

        <div class="box-body">
          <div class="row">
            <div class="col-md-6">


              <!-- post title-->
          <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" class="form-control" id="title" name ="title" placeholder="Enter Title">
          </div>
          <!--/post title-->

          <!-- post subtitle-->
          <div class="form-group">
            <label for="subtitle">Post Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name ="subtitle" placeholder="Enter Subtitle">
          </div>
          <!--/post subtitle -->

          <!-- post slug-->
          <div class="form-group">
            <label for="slug">Post Slug</label>
            <input type="text" class="form-control" id="slug" name ="slug" placeholder="Enter slug">
          </div>
          <!--/post slug -->


              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">

              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" name="image">

               <p class="help-block">Choose a file.</p>
             </div>
               <!-- /file upload -->

             <!-- publish -->
             <div class="checkbox">
                 <label>
                   <input type="checkbox" name="status" id="status"> Publish
                 </label>
               </div>



             <!-- /publish -->

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>

          <!--- editor start -->
        <div class="col-md-12">
        <div class="box box-info">
          <!-- editor header-->
          <div class="box-header">
            <h3 class="box-title">CK Editor
              <small>Advanced and full of features</small>
            </h3>

            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                      title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /editor header -->
          <!-- editor body -->
          <div class="box-body pad">

              <textarea id="editor1" name ="body" placeholder="Place some text here"
                        style="width: 100%; height: 350px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                      </textarea>

          </div>
          <!-- /editor body -->
        </div>
        </div>
        <!-- /editor ends -->
        <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="col-lg-offset-5 btn btn-success" href="{{route('posts.index')}}">Add New </a>


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
<!-- CK Editor -->
<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('body')
    //bootstrap WYSIHTML5 - text editor
    //$('.textarea').wysihtml5()
  })
</script>
@endsection
