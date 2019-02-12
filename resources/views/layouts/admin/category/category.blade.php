@extends('layouts.admin.app')

@section('main-content')

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



          <!-- form-->
          <form role="form">
            <div class="card-body"> <!-- title card-body -->
                <div class="row"> <!-- titile row -->

                  <div class="col-lg-offset-4 col-lg-4"> <!-- left colunm-->

                  <!-- post title-->
              <div class="form-group">
                <label for="Category">Category title</label>
                <input type="text" class="form-control" id="CategoryName" name ="name" placeholder="Category Title">
              </div>
              <!--/post title-->



              <!-- post slug-->
              <div class="form-group">
                <label for="Categoryslug">Category Slug</label>
                <input type="text" class="form-control" id="Categoryslug" name ="slug" placeholder="Category slug">
              </div>
              <!--/post slug -->


            </div> <!-- /left column-->
             <div> <!-- /title row -->
             </div> <!--/title card-body -->




          </div>


          <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div> <!-- main-content-row-->
  </section>  <!-- /.main content -->
</div><!-- Content Wrapper. Contains page content -->

@endsection


@endsection
