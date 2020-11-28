@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: url('images/b1.jpg');
    }
    .container .content {
  position: absolute;
  bottom: 20;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.1); /* Black background with 0.5 opacity */
  color: #fff;
  width: 100%;
  padding: 20px;
    }
    
    @media only screen and (max-width:620px) {
  /* For mobile phones: */
  .container .content  {
    width:100%;
  }
</style>
</head>
<body >
    

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card content ">
                <!-- <div class="card-header">{{ __('Login') }}</div> -->
                <div class="card-header bg-primary mb-3"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>
                <!-- <h1><center>Login</center></h1> -->
                <div class="card-body">
                    @isset($url)
                    <!-- <form method="POST" action="{{ route('login') }}"> -->
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                       @else
                       <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                       @endisset
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:black; font-weight:bold">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:black; font-weight:bold">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="color:black" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                                <a class="btn btn-link" href="forgot_password">
                                       {{ __('Forgot Your Password?') }}
                                    </a>
                                
                                    <a class="btn btn-link" href="register">
                                       {{ __('Sign Up') }}
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





</body>
</html>