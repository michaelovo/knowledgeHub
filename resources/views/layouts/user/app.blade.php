<!DOCTYPE html>
<html lang="en">

  <head>

    @include('layouts/user/head')
  </head>

  <body>
    <div style="background-color:#000;">
    <!-- header-->
    @include('layouts/user/nav')
      <!-- /header-->

  <!-- main content -->
    @section('main-content')
        @show
  <!-- /main content -->

  <!--footer-->
  @include('layouts/user/footer')

<!--/footer -->
</div>
  </body>

</html>
