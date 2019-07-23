@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">ثبت نام</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 row">
                                <div class="checkbox">
                                    <div class="col-md-6 col-6">
                                            <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                </label>
                                    </div>
                                        <div class="col-md-6 col-6">
                                                <p>
                                                        مرا به خاطر بسپار لطفا :)
                                                </p>
                                        </div>
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif
@if (session('warning'))
  <div class="alert alert-warning">
    {{ session('warning') }}
  </div>
@endif

<div id="content">

  <!-- Page Banner -->
      <div class="page-banner" style="margin-top: 150px;">
        <div class="container">
          <h2>پروژه</h2>
          <ul class="page-tree">
            <li><a href="#">پروژه</a></li>
            <li><a href="portfolio-2col.html">نمونه کار</a></li>
            <li><a href="index.html">صفحه نخست</a></li>
          </ul>
        </div>
      </div>

      <div class="container">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ">
              <div class="card card-signin my-5">
                <div class="card-body">
                  <h5 class="card-title text-center">ورود</h5>
                  <form class="form-signin" role="form" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
                    <div class="form-label-group">
                      <label for="inputEmail">ایمیل</label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required autofocus>


                    </div>

                    <div class="form-label-group">
                      <label for="password">رمز عبور</label>
                      <input type="password" id="password" class="form-control" placeholder="Password" name="password"  required>



                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Remember password</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">ورود</button>
                    {{-- <hr class="my-4"> --}}

                    <div class="border-top card-body text-center">رمز عبور خود را فراموش کرده اید؟ <a href="{{ route('password.request') }}"> اره </a></div>
                    {{-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> --}}
                    <div class="border-top card-body text-center">هنوز ثبت نام نکرده‌اید؟ <a href="/register">ثبت نام</a></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

</div>
@endsection


