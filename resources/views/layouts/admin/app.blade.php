<!DOCTYPE html>
<html>
<head>
  @include('layouts.admin.head')
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  @include('layouts.admin.nav')
    @include('layouts.admin.sidebar')

    @section('main-content')
      @show
    @include('layouts.admin.footer')




</div>



</body>
</html>
