@extends('layouts.admin.app')

@section('main-content')


  <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->

    <!--- start of first section ---->
    <section class="content-header">   <!-- Content Header (Page header) -->
      <div class="container-fluid">   <!-- Container fluid -->

          <div class="col-sm-6"><!--super header -->
            <h1>Text Editors</h1>
          </div> <!-- /super header -->

      </div><!-- /.container-fluid -->
    </section> <!-- /Content Header (Page header) -->
<!--- ends of first section -->

    <!-- Main content -->
    <section class="content">
      <div class="row"><!-- main-content-row-->
        <div class="col-md-12"> <!--main-content col-md-12 -->
          <div class="card card-default"> <!-- card card-default -->

            @if (count($errors) >0 )
              @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
              @endforeach
            @endif

            <!-- form-->
            <form role="form" action="{{route('post.store')}}" method="post">
              {{csrf_field()}}
              <div class="card-body"> <!-- title card-body -->
                  <div class="row"> <!-- titile row -->

                    <div class="col-md-6"> <!-- left colunm-->

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


              </div> <!-- /left column-->
               <div> <!-- /title row -->
               </div> <!--/title card-body -->


              <!-- right colunm begins -->
              <div class="col-md-6">

                <!-- file upload -->
                  <div class="form-group">
                    <label for="image">File input</label>
                    <div class="col-sm-12">
                      <input type="file" class="form-control" name="image">
                    </div>
                  </div>
                  <!-- /file upload -->

                <!-- publish -->
                <div class="form-group">
                  <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="status" id="status">
                      <label class="form-check-label" for="status">Publish</label>
                  </div>
                </div>
                <!-- /publish -->

              </div>
                <!-- /right colunm ends -->

            </div>

            <!--- editor start -->
          <div class="card card-info card-outline">
          <div class="card card-outline card-info">
            <!-- editor header-->
            <div class="card-header">
              <h3 class="card-title">
                Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /editor header -->
            <!-- editor body -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" name ="body" placeholder="Place some text here"
                          style="width: 100%; height: 350px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
            </div>
            <!-- /editor body -->
         </div>
        </div>
        <!-- /editor ends -->
        <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

      </div> <!-- main-content-row-->
    </section>  <!-- /.main content -->
  </div><!-- Content Wrapper. Contains page content -->
@endsection
