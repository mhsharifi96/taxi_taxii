{{-- <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fulid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav navbar-right">
            
              <li><a href="/posts">درخواست‌ها</a></li>
              <li><a href="/about">درباره ما</a></li>
              <li><a href="/services">Services</a></li>
              <li><a href="/">خانه</a></li>
               <!-- Authentication Links -->
               @if (Auth::guest())
            
               <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> ورود/ثبت‌نام<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('login') }}">ورود</a></li>
                            <li><a href="{{ route('register') }}">ثبت‌نام</a></li>
                    </ul>
                </li>
           @else
               <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> سلام 
                       {{ Auth::user()->name }}<span class="caret"></span>
                   </a>

                   <ul class="dropdown-menu" role="menu">
                       <li><a href="/dashboard">داشبورد</a></li>
                       <li>
                           <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                               خروج
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               {{ csrf_field() }}
                           </form>
                       </li>
                   </ul>
               </li>
           @endif
            </ul>

            <!-- Right Side Of Navbar -->
            
        </div>
    </div>
</nav> --}}



{{--<nav class="navbar navbar-expand-lg navbar-light bg-dark ">--}}
        {{----}}
                {{----}}
        {{----}}
        {{----}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
          {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}
      {{----}}
        {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
          {{--<ul class="navbar-nav ">--}}
              {{--<li class="nav-item">--}}
              {{--<a class="navbar-brand" href="{{url('/')}}"> --}}
                            {{--<img src="{{url('/image/logo.png')}}" alt="" style="width:80%"> --}}
                        {{--</a>--}}
              {{--</li>--}}
              {{----}}
            {{--<li class="nav-item  ">--}}
              {{--<a class="nav-link nav-link-text" href="/">خانه <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link nav-link-text" href="{{ url('about')}}">درباره ما </a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link nav-link-text" href="{{ url('posts')}}">درخواست‌ها</a>--}}
              {{--</li>--}}

            {{--@if (Auth::guest())--}}
            {{--<li class="nav-item dropdown">--}}
              {{--<a class="nav-link dropdown-toggle nav-link-text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--ورود/ثبت‌نام--}}
              {{--</a>--}}
              {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                {{-- <a class="dropdown-item" href="#">Action</a>--}}
                {{--<a class="dropdown-item" href="#">Another action</a> --}}
                {{--<a class="dropdown-item" style="text-align:right" href="/login">ورود</a>--}}
                {{--<div class="dropdown-divider"></div>--}}
                {{--<a class="dropdown-item" style="text-align:right" href="/register">ثبت نام</a>--}}
              {{--</div>--}}
            {{--</li>--}}
            {{--@else--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle nav-link-text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                  {{--ناحیه کاربری--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                  {{-- <a class="dropdown-item" href="#">Action</a>--}}
                  {{--<a class="dropdown-item" href="#">Another action</a> --}}
                  {{--<a class="dropdown-item" style="text-align:right" href="/dashboard">پروفایل کاربری</a>--}}
                  {{--<div class="dropdown-divider"></div>--}}
                  {{--<a class="dropdown-item" style="text-align:right" href="{{ route('logout') }}"--}}
                            {{--onclick="event.preventDefault();--}}
                                      {{--document.getElementById('logout-form').submit();">--}}
                            {{--خروج--}}
                        {{--</a>--}}

                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            {{--{{ csrf_field() }}--}}
                        {{--</form>--}}
                {{--</div>--}}
              {{--</li>--}}
        {{--@endif--}}
            {{-- <li class="nav-item">--}}
              {{--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
            {{--</li> --}}
            {{----}}
        {{----}}
          {{--</ul>--}}
          {{--<form class="form-inline my-2 my-lg-0 mr-auto" action="/search" method="get">--}}
            {{--<input class="form-control mr-sm-2 form-control-search  " type="text" name="search" placeholder="Search" aria-label="Search">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">جست‌وجو</button>--}}
          {{--</form>--}}
        {{--</div>--}}
          {{--<a class="navbar-brand logo-mobile" href="{{url('/')}}"> --}}
            {{--<img src="{{url('/image/logo.png')}}" alt="" style="width:80%"> --}}
        {{--</a>--}}


        {{----}}
      {{--</nav>--}}



<header class="clearfix">
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="top-line">
            <div class="container">

                <p>
                    <span><i class="fa fa-phone"></i>03155579059</span>
                    <span><i class="fa fa-envelope-o"></i><a href="mailto:info@sursiz.ir">info@sursiz.ir</a></span>
                </p>
                    <ul class="social-icons-nav">

                        <li><a class="facebook" href="https://www.facebook.com/sursizteam"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="https://twitter.com/sursizteam"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="rss" href="https://www.linkedin.com/in/sursizteam"><i class="fa fa-linkedin"></i></a></li>
                        {{--<li><a class="google" href="#"><i class="fa fa-youtube"></i></a></li>--}}
                        <li><a class="linkedin" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="fa fa-telegram"></i></a></li>

                    </ul>



            </div>
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img alt="" src="{{url('/image/surlog.png')}}"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="/contact/create">تماس با ما</a></li>
                    <li><a href="{{ url('about')}}">درباره ما</a></li>

                    @if (Auth::guest())
                    <li class="drop"><a href="#">ورود/ثبت نام</a>
                        <ul class="drop-down">
                            <li><a href="/login">ورود</a></li>
                            <li><a href="/register">ثبت نام</a></li>
                        </ul>
                    </li>
                    @else
                        <li class="drop"><a href="#">ناحیه کاربری</a>
                            <ul class="drop-down">
                                <li><a href="/dashboard">پروفایل کاربری</a></li>
                                <li>


                                    <a class="dropdown-item" style="text-align:right" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    {{--<a class="dropdown-item" style="text-align:right" href="logout">--}}
                                        {{--خروج--}}
                                    {{--</a>--}}
                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--{{ csrf_field() }}--}}
                                    {{--</form>--}}
                                </li>
                            </ul>
                        </li>
                    @endif


                    <li><a href="/blog">وبلاگ</a></li>
                    <li><a href="{{ url('posts')}}">درخواست ها</a></li>
                    <li><a href="/">صفحه اصلی</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
