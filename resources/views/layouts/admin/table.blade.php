@extends('layouts.admin.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
<div class="card-header">
  <h3 class="card-title">Titles</h3>

  <div class="card-tools">
    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
  </div>
</div>
<!-- /.card-header -->
<div class="card-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control" id="title" name ="title" placeholder="Enter Title">
      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <label for="subtitle">Post Subtitle</label>
        <input type="text" class="form-control" id="subtitle" name ="subtitle" placeholder="Enter Subtitle">

      </div>
      <label for="slug">Post Slug</label>
      <input type="text" class="form-control" id="slug" name ="title" placeholder="Enter slug">
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="col-sm-12">
          <input type="file" @change="updateprofile" class="form-input" name="photo">
        </div>







      </div>
      <!-- /.form-group -->
      <div class="form-group">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" name="publish" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Publish</label>
        </div>

      </div>
      <!-- /.form-group -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.card-body -->
   @endsection
