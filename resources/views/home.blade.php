@extends('layouts/user/app')

@section('bg-image',('user/img/blogBg.jpg'))
@section('heading','Welcome')
@section('sub-heading',"...Never stop learning")
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
      .fa-thumbs-up:hover{
        color:blue;

      }
  </style>
@endsection
<!-- Main Content -->
@section('main-content')

<div class="container" style="background-color:#fff;">
  <div class="row" id="app">
    <div class="col-lg-9 col-md-10 mx-auto">


      <!--'$slug' as defined in HomeController@index-->


      <!---Vuesjs, v-for and axios-->
      <posts v-for='value in blog'
        :title=value.title
        :subtitle=value.subtitle
        :created_at=value.created_at
        :post-id=value.id
        login="{{Auth::check()}}"
        :likes=value.likes.length
        :slug =value.slug
        :key=value.index>
      </posts>
      <!--camel case notation as define in post.vue has to be rename as "post-id" here to avoid error-->

      
        </br>

    </div>
  </div>
</div>
  <hr>
@endsection

@section('footer')
  <!--to import compile vue--->
  <script src="{{asset('js/app.js')}}"></script>
@endsection
