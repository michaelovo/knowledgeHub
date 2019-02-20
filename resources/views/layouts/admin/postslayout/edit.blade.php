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
          <form role="form" action="{{route('post.update',$posts->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <!--eithr 'PUT' or 'PATCH' will for the above method-->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">


              <!-- post title-->
          <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" class="form-control" id="title" name ="title" placeholder="Enter Title" value="{{$posts->title}}">
          </div>
          <!--/post title-->

          <!-- post subtitle-->
          <div class="form-group">
            <label for="subtitle">Post Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name ="subtitle" placeholder="Enter Subtitle" value="{{$posts->subtitle}}">
          </div>
          <!--/post subtitle -->

          <!-- post slug-->
          <div class="form-group">
            <label for="slug">Post Slug</label>
            <input type="text" class="form-control" id="slug" name ="slug" placeholder="Enter slug" value="{{$posts->slug}}">
          </div>
          <!--/post slug -->


              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <br>
              <div class="form-group"><!--file upload -->
                <div class="pull-right"><!--pull right -->
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="image">
                   <p class="help-block">Choose a file.</p>
                </div><!--/pull right -->

                <!-- publish -->
                <div class="checkbox pull-left">
                    <label>
                      <input type="checkbox" value="1" name="status" id="status" @if ($posts->status == 1){{'checked'}} @endif> Publish
                    </label>
                  </div>
                <!-- /publish -->
             </div><!-- /file upload -->

             <br>

             <div class="form-group" style="margin-top:18px;">   <!--Tag select -->
                   <label>Select Tags</label>
                   <!--'tags[]' is the model relationship name defined in user model--->
                   <select class="form-control select2 select2-hidden-accessible" name="tags[]" multiple=""
                   data-placeholder="Select Tags" style="width: 100%;" tabindex="-1" aria-hidden="true">


                   @foreach($tag as $tag)

                   <!--To auto-hilight selected options from db in frontend-->
                     <option value="{{$tag->id}}"
                        @foreach($posts->tags as $postsTag)
                          @if($postsTag->id == $tag->id)
                            selected
                          @endif
                        @endforeach
                       >
                       {{$tag->name}}
                     </option>
                     <!-- /To auto-hilight selected option from db in frontend -->

                    @endforeach
                   </select>
             </div> <!--/Tag select -->


             <div class="form-group" style="margin-top:18px;"> <!--Category select -->
                   <label>Select Categories</label>
                    <!--'category[]' is the model relationship name defined in user model--->
                   <select class="form-control select2 select2-hidden-accessible" name="category[]" multiple=""
                   data-placeholder="Select Categories" style="width: 100%;" tabindex="-1" aria-hidden="true">

                     @foreach($category as $category)

                   <!--To auto-hilight selected options from db in frontend -->
                         <option value="{{$category->id}}"
                            @foreach($posts->category as $postsCategory)
                              @if($postsCategory->id == $category->id)
                                selected
                              @endif
                            @endforeach
                           >
                           {{$category->name}}
                         </option>
                         <!-- /To auto-hilight selected option from db in frontend -->

                    @endforeach

                   </select>
             </div><!--/Category select -->


              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>

          <!--- editor start -->
        <div class="col-md-12">
        <div class="box box-info">
          <!-- editor header-->
          <div class="box-header">
            <h3 class="box-title">Write Post body here
              <small>Fast and simple</small>
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

              <textarea id="editor1" name ="body" placeholder="Place some text here" value="{{$posts->body}}"
                        style="width: 100%; height: 350px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                      {{$posts->body}}</textarea>


          </div>
          <!-- /editor body -->
        </div>
        </div>
        <!-- /editor ends -->
        <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-warning" href="{{route('post.index')}}">Back </a>


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
<!-- CK Editor -->
<!--script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script-->
<!-- CK Editor online full package-->
<!--script src="//cdn.ckeditor.com/4.11.2/full/ckeditor.js"></script-->

<!-- CK Editor builder-->
<script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>


<!-- Select2 -->
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('body')
    //bootstrap WYSIHTML5 - text editor
    //$('.textarea').wysihtml5()
  })
</script>

<script>
$(document).ready(function(){
  $('.select2').select2();
});
</script>
@endsection
