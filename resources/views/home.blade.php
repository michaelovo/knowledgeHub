@extends('layouts/user/app')

@section('head')

@endsection

<!---To display uploaded image from the posts db table-. Then after go to cmd
  and type 'php artisan storage:link' To link the [public] directory and
  the [storage/app/public] subdirectory, else image won't be visible.
--->
@section('bg-image',asset('user/img/contact-bg.jpg'))
@section('heading','Welcome')
@section('sub-heading',"")

@section('main-content')
<!-- Post Content -->


 <article>
   <div class="container">
     <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

        </div>
     </div>
   </div>
 </article>

 <hr>

@endsection
@section('footer')
@endsection
