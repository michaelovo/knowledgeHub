@extends('layouts/user/app')

@section('head')
<!-- prism css file--->
<link href="{{asset('user/css/prism.css')}}" rel="stylesheet" type="text/css">
@endsection

<!---To display uploaded image from the posts db table-. Then after go to cmd
  and type 'php artisan storage:link' To link the [public] directory and 
  the [storage/app/public] subdirectory, else image won't be visible.
--->
@section('bg-image',Storage::disk('local')->url($post->image))
@section('heading',$post->title)
@section('sub-heading',$post->subtitle)

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
         <small>Created {{$post->created_at->diffforhumans()}}</small>
         <!--'diffforhumans' allows displays in human readable form -->

          <!--To display Tag category 'category' is the Relationship name in post model-->
         @foreach($post->category as $category)
          <a href="{{ route('category', $category->slug) }}"><small class="float-right" style="margin-right:5px; border-radius:5px; border:1px solid gray;padding:5px;">
            #{{$category->name}}
          </small></a>
         @endforeach
          <!--/To display Tag category-->

           <!--To display post body-->
         {!!htmlspecialchars_decode($post->body)!!}
         <!--This enabled the text to be display in html form. pls take note of the single '{}' and '!!'-->
          <!--To display post body-->

         <h5>Tags</h5>
         <!--To display Tag 'tags' is the Relationship name in post model  -->
         @foreach($post->tags as $tag)
        <a href="{{ route('tags', $tag->slug) }}"><small class="float-left" style="margin-right:20px; border-radius:5px; border:1px solid gray;padding:5px;">
            #{{$tag->name}}
          </small> </a>
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
