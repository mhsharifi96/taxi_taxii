@extends('layouts.app')

@section('content')
    {{-- <div class="jumbotron text-center">
        <h1>Welcome To Laravel!</h1>
        <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div> --}}
    <div class="header-banner ">
        <div class="container text-center text-location">
            <h1 class="header-title">اولین تاکسی ذهنی در ایران</h1>
            <h4 class="index-text">در مسیر زندگی همیشه یک خط ویژه وجود دارد البته اگر مجوز داشته باشی! <span>مثل یک تاکسی</span></h4>
            <h5 class="index-text">
                همین الان مسیرخودتو عوض کن
            </h5>
            @if (Auth::guest())
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">ورود</a> <a class="btn btn-success btn-lg" href="/register" role="button">ثبت نام</a></p>
        
            @else
            <p>
                <a class="btn btn-primary btn-lg" href="/posts/create" role="button">درخواست تاکسی ذهنی</a>
                <a class="btn btn-success btn-lg" href="/posts" role="button">آخرین درخواست ها</a>
             </p>
            
            @endif
        </div>
    </div>
    <div class="col-md-12">
        
    </div>
@endsection

