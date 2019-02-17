@extends('layouts/user/app')


@section('bg-image',asset('user/img/post-bg.jpg'))
@section('heading',$slug->title)
@section('sub-heading',$slug->subtitle)

@section('main-content')
<!-- Post Content -->
 <article>
   <div class="container">
     <div class="row">

       <div class="col-lg-8 col-md-10 mx-auto">
         <small>Created {{$slug->created_at->diffforhumans()}}</small>
         <!--'diffforhumans' allows displays in human readable form -->
        ||
         @foreach($slug->category as $category)

          <small>
            {{$category->name}}
          </small>

         @endforeach

         {!!htmlspecialchars_decode($slug->body)!!}
         <!--This enabled the text to be display in html form. pls take note of the single '{}' and '!!'-->
         <h5>Tags</h5>
         @foreach($slug->tags as $tag)

        <small style="margin-right:20px; border-radius:5px; border:1px solid gray;padding:5px;">
            #{{$tag->name}}
          </small>
         @endforeach
     </div>

   </div>
 </article>

 <hr>

@endsection
