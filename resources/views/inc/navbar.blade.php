<nav class="navbar navbar-inverse navbar-fixed-top">
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
</nav>