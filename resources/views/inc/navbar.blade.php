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



<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        
                
        
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
              <li class="nav-item">
              <a class="navbar-brand" href="{{url('/')}}"> 
                            <img src="{{url('/image/logo.png')}}" alt="" style="width:80%"> 
                        </a>
              </li>
              
            <li class="nav-item  ">
              <a class="nav-link nav-link-text" href="/">خانه<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-link-text" href="{{ url('about')}}">درباره ما </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-text" href="{{ url('posts')}}">درخواست‌ها</a>
              </li>

            @if (Auth::guest())
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav-link-text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ورود/ثبت‌نام
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{-- <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a> --}}
                <a class="dropdown-item" style="text-align:right" href="/login">ورود</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" style="text-align:right" href="/register">ثبت نام</a>
              </div>
            </li>
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link-text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ناحیه کاربری
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  {{-- <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a> --}}
                  <a class="dropdown-item" style="text-align:right" href="/dashboard">داشبورد</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" style="text-align:right" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            خروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </div>
              </li>
        @endif
            {{-- <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> --}}
            
        
          </ul>
          <form class="form-inline my-2 my-lg-0 mr-auto" action="/search" method="get">
            <input class="form-control mr-sm-2 form-control-search  " type="text" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">جست‌وجو</button>
          </form>
        </div>
          <a class="navbar-brand logo-mobile" href="{{url('/')}}"> 
            <img src="{{url('/image/logo.png')}}" alt="" style="width:80%"> 
        </a>


        
      </nav>