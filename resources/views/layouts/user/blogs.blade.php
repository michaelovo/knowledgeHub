@extends('layouts/user/app')

@section('bg-image',('user/img/home-bg.jpg'))

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
<div class="container">
  <div class="row" id="app">
    <div class="col-lg-6 col-md-12 mx-auto">
      <!--'$slug' as defined in HomeController@index-->


      <!---Vuesjs, v-for and axios-->
      <posts v-for='value in blog'
        :title=value.title
        :subtitle=value.subtitle
        :created_at=value.created_at
        :key=value.index>
      </posts>

      <!-- Laravel Pagination -->
      <div class="clearfix">
        {{$slug->links()}}
        <!-- "slug" as defined in the index function of the HomeController -->
      </div>
      <!--/ Laravel Pagination -->
    </div>
  </div>
</div>
  <hr>
@endsection

@section('footer')
  <!--to import compile vue--->
  <script src="{{asset('js/app.js')}}"></script>
@endsection
