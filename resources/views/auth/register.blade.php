@extends('layouts.app')

@section('content')
{{-- <div class="container" style="padding-top:10%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ثبت نام اولین تاکسی ذهنی ایران</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">نام</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="نام">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" >ایمیل</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="ایمیل">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">پسورد</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="پسورد">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">تکرار پسورد</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تایید پسورد">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ثبت نام
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div id="content">

    <!-- Page Banner -->
    <div class="page-banner" style="margin-top: 150px;">
        <div class="container">
            <h2>پروژه</h2>
            <ul class="page-tree">
                <li><a href="/register">ثبت نام</a></li>
                <li><a href="/">صفحه نخست</a></li>
            </ul>
        </div>
    </div>



<div class="container">
    {{-- <br>   --}}
    
    
    {{-- <hr> --}}
    
    
    <div class="row justify-content-center">
        <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card margin-card">
    <header class="card-header">
        {{-- <a href="" class="float-right btn btn-outline-primary mt-1">Log in</a> --}}
        <h4 class="card-title mt-2">ثبت نام در اولین تاکسی ذهنی در ایران</h4>
    </header>
    <article class="card-body">
    <form role="form" method="post" action="{{ route('register') }}">
        <div class="form-row" >
            {{ csrf_field() }}

            <div class="col form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">نام</label>   
                  {{-- <input type="text" class="form-control" placeholder=""> --}}
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="نام">
                  @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
            </div> <!-- form-group end.// -->

            <div class="col form-group">
                <label>نام خانوادگی</label>
                  <input type="text" class="form-control" placeholder="نام خانوادگی">
            </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                
            <label>ایمیل</label>
            {{-- <input type="email" class="form-control" placeholder=""> --}}
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="ایمیل">
            <small class="form-text text-muted">اسپم نمیکنیم :)</small>
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div> <!-- form-group end.// -->
        {{-- <div class="form-group">
                <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="option1">
              <span class="form-check-label"> Male </span>
            </label>
            <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="option2">
              <span class="form-check-label"> Female</span>
            </label>
        </div> <!-- form-group end.// --> --}}
        {{-- <div class="form-row">
            <div class="form-group col-md-6">
              <label>City</label>
              <input type="text" class="form-control">
            </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
              <label>Country</label>
              <select id="inputState" class="form-control">
                <option> Choose...</option>
                  <option>Uzbekistan</option>
                  <option>Russia</option>
                  <option selected="">United States</option>
                  <option>India</option>
                  <option>Afganistan</option>
              </select>
            </div> <!-- form-group end.// -->
        </div> <!-- form-row.// --> --}}
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                
            <label for="password" class="">رمز عبور</label>
            
            <input id="password" type="password" class="form-control" name="password" required placeholder="رمزعبور">
            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        </div> <!-- form-group end.// -->  
        <div class="form-group">
            <label for="password-confirm" class="">تکرار پسورد</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تایید پسورد">
        </div> 
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> ثبت نام </button>
            
            
        </div> <!-- form-group// -->      
        {{-- <div class="text-muted" style="
        direction: ltr;
        text-align: left;
        padding: 0px 20px 0;">By clicking the 'Sign Up' button, you confirm that you accept our <br>
             Terms of use and Privacy Policy.</div>                                           --}}
    </form>
    </article> <!-- card-body end .// -->
    <div class="border-top card-body text-center">اکانت دارید؟ <a href="/login">ورود</a></div>
    </div> <!-- card.// -->
    </div> <!-- col.//-->
    
    </div> <!-- row.//-->
    
    
    </div> 
    <!--container end.//-->
    
</div>
@endsection
