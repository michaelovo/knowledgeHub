@extends('layouts/user/app')

@section('bg-image',asset('user/img/about-bg.jpg'))
@section('heading','About Us')
@section('sub-heading',"")
@section('head')
<!-- prism css file--->
<link href="{{asset('user/css/prism.css')}}" rel="stylesheet" type="text/css">
@endsection

<!---To display uploaded image from the posts db table-. Then after go to cmd
  and type 'php artisan storage:link' To link the [public] directory and
  the [storage/app/public] subdirectory, else image won't be visible.
--->

@section('main-content')
<!-- Main Content -->
   <div class="container" style="background-color:#fff;">
     <div class="row">
       <div class="col-lg-8 col-md-10 mx-auto">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum
           ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio,
           adipisci quas excepturi maxime quae totam ducimus consectetur?</p>

         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium
           recusandae illo eaque architecto error, repellendus iusto reprehenderit,
           doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas
           voluptatibus, minus!</p>
           
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur
            magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam
            soluta voluptatibus corporis atque iste neque sit tempora!</p>
       </div>
     </div>
   </div>

   <hr>

@endsection
@section('footer')
<script src="{{asset('user/js/prism.js')}}"></script>
@endsection
