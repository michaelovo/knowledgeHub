@extends('layouts/user/app')

@section('bg-image',('user/img/home-bg.jpg'))

@section('main-content')
<!-- Main Content -->
@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($slug as $post)
      <div class="post-preview">

        <a href="{{route('posts',$post->slug)}}">
          <h2 class="post-title">
          {{$post->title}}
          </h2>
          <h3 class="post-subtitle">
            {{$post->subtitle}}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">#</a>
          {{$post->created_at->diffforhumans()}}</p>
      </div>
        @endforeach
      <hr>

      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>

<hr>
@endsection
