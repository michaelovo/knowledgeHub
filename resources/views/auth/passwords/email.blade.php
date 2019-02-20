@extends('layouts/user/app')

@section('head')

@endsection


@section('bg-image',asset('user/img/contact-bg.jpg'))
@section('heading','Password Reset')
@section('sub-heading',"")

@section('main-content')
<!-- Post Content -->


 <article>
   <div class="container">
     <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          <form method="POST" action="{{ route('password.email') }}">
              @csrf

              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Send Password Reset Link') }}
                      </button>
                  </div>
              </div>
          </form>

        </div>
     </div>
   </div>
 </article>

 <hr>

@endsection
@section('footer')
@endsection
