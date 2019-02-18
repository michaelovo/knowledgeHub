@extends('layouts/user/app')

@section('head')
<!-- prism css file--->
<link href="{{asset('user/css/prism.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('bg-image',asset('user/img/post-bg.jpg'))
@section('heading',$slug->title)
@section('sub-heading',$slug->subtitle)

@section('main-content')
<!-- Post Content -->

<div id="fb-root"></div>
<!-- facebook comments system header -->
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=2137804462932884&autoLogAppEvents=1">
</script>
<!-- /facebook comments system header-->
 <article>
   <div class="container">
     <div class="row">

       <div class="col-lg-8 col-md-10 mx-auto">
         <small>Created {{$slug->created_at->diffforhumans()}}</small>
         <!--'diffforhumans' allows displays in human readable form -->

          <!--To display Tag category-->
         @foreach($slug->category as $category)
          <small class="float-right" style="margin-right:5px; border-radius:5px; border:1px solid gray;padding:5px;">
            #{{$category->name}}
          </small>
         @endforeach
          <!--/To display Tag category-->

           <!--To display post body-->
         {!!htmlspecialchars_decode($slug->body)!!}
         <!--This enabled the text to be display in html form. pls take note of the single '{}' and '!!'-->
          <!--To display post body-->

         <h5>Tags</h5>
         <!--To display Tag name-->
         @foreach($slug->tags as $tag)
        <small style="margin-right:20px; border-radius:5px; border:1px solid gray;padding:5px;">
            #{{$tag->name}}
          </small>
         @endforeach
          <!--/To display Tag name-->
     </div>
     <!-- facebook comments system footer-->
     <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
     <!-- /facebook comments system footer -->
   </div>
 </article>

 <hr>

@endsection
@section('footer')
<script src="{{asset('user/js/prism.js')}}"></script>
@endsection
