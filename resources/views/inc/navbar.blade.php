

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
                <a class="navbar-brand" href="#">
                    {{-- <img alt="" src="{{url('/image/surlog.png')}}"> --}}
                    <h2 class="logo">Sursiz</h2>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li class="drop"><a href="#">ورود/ثبت نام</a>
                            <ul class="drop-down">
                                <li><a href="/login">ورود</a></li>
                                <li><a href="/register">ثبت نام</a></li>
                            </ul>
                        </li>
                        @else
                            <li class="drop"><a href="#" style="color:blue ;font-weight:bold;">ناحیه کاربری</a>
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
                    <li><a href="/contact/create">تماس با ما</a></li>
                    <li><a href="{{ url('about')}}">درباره ما</a></li>

                   


                    <li><a href="/blog">وبلاگ</a></li>
                    <li><a href="{{ url('posts')}}">درخواست ها</a></li>
                    <li><a href="/">صفحه اصلی</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
