@extends('layouts.app')

@section('content')
    {{-- <div class="jumbotron text-center">--}}
        {{--<h1>Welcome To Laravel!</h1>--}}
        {{--<p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>--}}
        {{--<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>--}}
    {{--</div> --}}
    {{--<div class="header-banner ">--}}
        {{--<div class="container text-center text-location">--}}
            {{--<h1 class="header-title">اولین تاکسی ذهنی در ایران</h1>--}}
            {{--<h4 class="index-text">در مسیر زندگی همیشه یک خط ویژه وجود دارد البته اگر مجوز داشته باشی! <span>مثل یک تاکسی</span></h4>--}}
            {{-- <h5 class="index-text">--}}
                {{--همین الان مسیرخودتو عوض کن--}}
            {{--</h5> --}}
            {{--@if (Auth::guest())--}}
            {{--<p><a class="btn btn-primary btn-lg" href="{{ url('login')}}" role="button">ورود</a> <a class="btn btn-success btn-lg" href="/register" role="button">ثبت نام</a></p>--}}
            {{----}}
            {{--@else--}}
            {{--<p>--}}
                {{--<a class="btn btn-primary btn-lg" href="/posts/create" role="button">درخواست تاکسی ذهنی</a>--}}
                {{--<a class="btn btn-success btn-lg" href="/posts" role="button">آخرین درخواست ها</a>--}}
             {{--</p>--}}
            {{----}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">--}}
        {{----}}
    {{--</div>--}}




<!-- Container -->
<div id="container">
    <!-- Header
        ================================================== -->

    <!-- End Header -->

    <!-- slider
        ================================================== -->
    {{--<div id="slider">--}}
        {{--<!----}}
        {{--#################################--}}
            {{--- THEMEPUNCH BANNER ---}}
        {{--#################################--}}
        {{---->--}}

        {{--<div class="fullwidthbanner-container" style="width: 100%">--}}
            {{--<div class="fullwidthbanner">--}}
                {{--<ul>--}}
                    {{--<!-- THE FIRST SLIDE -->--}}
                    {{--<li data-transition="3dcurtain-vertical">--}}
                        {{--<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->--}}
                        {{--<img height="100%" src="upload/slider-revolution/brain2.png"  >--}}


                        {{--<div class="caption large_text sfb"--}}
                             {{--data-x="60"--}}
                             {{--data-y="140"--}}
                             {{--data-speed="600"--}}
                             {{--data-start="1200"--}}
                             {{--data-endspeed="300" >--}}
                        {{--</div>--}}



                        {{--<!-- THE CAPTIONS IN THIS SLDIE -->--}}
                    {{--</li>--}}
                    {{--<!-- THE second SLIDE -->--}}
                    {{--<li data-transition="papercut" data-slotamount="15" data-masterspeed="300">--}}
                        {{--<!-- THE MAIN IMAGE IN THE second SLIDE -->--}}
                        {{--<img alt="" src="upload/slider-revolution/99.jpg" >--}}

                        {{--<!-- THE CAPTIONS IN THIS SLDIE -->--}}

                    {{--</li>--}}

                    {{--<!-- THE third SLIDE -->--}}
                    {{--<li data-transition="turnoff" data-slotamount="1" data-masterspeed="300">--}}
                        {{--<!-- THE MAIN IMAGE IN THE third SLIDE -->--}}
                        {{--<img alt="" src="upload/slider-revolution/321.jpg" >--}}

                        {{--<!-- THE CAPTIONS IN THIS SLDIE -->--}}
                        {{--<div class="caption large_text sfb"--}}
                             {{--data-x="60"--}}
                             {{--data-y="270"--}}
                             {{--data-speed="600"--}}
                             {{--data-start="1200"--}}
                             {{--data-easing="easeOutExpo" data-endeasing="easeInSine" >--}}
                            {{--@if (Auth::guest())--}}
                            {{--<a href="{{ url('login')}}" style="padding: 5px 5px 5px 5px; font-size: x-large">شروع کن</a>--}}
                            {{--@else<a href="{{ url('dashboard')}}" style="padding: 5px 5px 5px 5px; font-size: x-large">شروع کن</a>--}}
                            {{--@endif--}}
                        {{--</div>--}}

                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- End slider -->

    <div class="container--head">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="upload/slider-revolution/321.jpg" alt="تاکسی ذهنی" style="width:100%;min-height:20em">
                    <div class="carousel-caption" style="text-align: left;margin-bottom:50px">
                        @if (Auth::guest())
                        <a  href="{{ url('login')}}" style="color: white; background-color:#1F646C; padding: 10px 10px 10px 10px; ">شروع کنید</a>
                        @else<a href="{{ url('dashboard')}}" style="padding: 5px 5px 5px 5px; font-size: x-large">شروع کن</a>
                            @endif
                    </div>
                </div>
                <div class="item">
                    <img src="upload/slider-revolution/99.jpg" alt="سورسیز" style="width:100%;min-height:20em">
                </div>
                <div class="item">
                    <img src="upload/slider-revolution/82.jpg" alt="sursiz" style="width:100%;min-height:20em">

                </div>

            </div>
        </div>
    </div>


    <!-- content
        ================================================== -->
    <div id="content">

        <div class="services-box">
            <div class="container" style="max-width: 100%;">
                <div class="row">

                    <div class="col-md-4">
                        <div class="services-post">

                            <a class="services-icon1" href="#"><i class="fa fa-cogs"></i></a>

                            <div class="services-post-content" >
                                <h4>چند منظوره</h4>
                                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services-post">
                            <a class="services-icon2" href="#"><i class="fa fa-desktop"></i></a>
                            <div class="services-post-content" >
                                <h4>طراحی انعطاف پذیر</h4>
                                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services-post">
                            <a class="services-icon3" href="#"><i class="fa fa-book"></i></a>
                            <div class="services-post-content">
                                <h4>توسعه یافته</h4>
                                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- recent-works-box -->
        <div class="recent-works">
            <div class="container">
                <h3>آخرین درخواست ها</h3>


                <div class="row">

                    @foreach($posts as $p)
                        <div class="col-md-4">
                            <div  class="card" style="min-height:200px;" >
                            <span>
                                <div class="col-md-5" style="text-align: center">
                                    <img src="../{{$p->image}}" alt="" width="130" height="130" style="border-radius: 10px; margin-top:12%;">
                                    <a class="btn btn-success"  style=" display:block; position:relative; top: 10px;" href="/posts/{{$p->id}}" role="button">مشاهده</a>  

                                </div>
                                <div class="col-md-7 card-body">
                                    
                                        <a href="/posts/{{$p->id}}">
                                        <h4 class="card-title" style="text-align:center">{!!str_limit(strip_tags($p->title),45)!!}</h4>
                                        </a>
                                        <h>{{$p->category->name}}</h>
                                        <h style="float:left">{{$p->user->name}}</h>
                                        <h3 style="margin-top: 1rem; font-size: 15px">
                                        {!!str_limit(strip_tags($p->body),80)!!}
                                        </h3>
                                        
                                        
                                        
                                        
                                </div>
                                
                            </span>
                            </div>
                        </div>

                    @endforeach





                </div>






                {{--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
                    {{--<!-- Wrapper for slides -->--}}
                    {{--<div class="carousel-inner">--}}
                        {{--<div class="item active">--}}
                            {{--<div class="row" style="margin-left:0px;margin-right: 0px ">--}}
                                {{--@foreach($posts as $post)--}}
                                {{--@for($i=0;$i<3;$i++)--}}
                                    {{--@if($posts[$i])--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="work-post {{$posts[$i]->category->name}}">--}}
                                        {{--<div class="work-post-gal">--}}
                                            {{--<img alt="" height="150px" src="{{url('image/'.$pic[$j].' ')}}">--}}
                                            {{--<div class="hover-box">--}}
                                                {{--<a class="zoom video" href="http://www.youtube.com/watch?v=XSGBVzeBUbk"></a>--}}
                                                {{--<a class="page" href="single-project.html"></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="work-post-content">--}}
                                            {{--<a href="/posts/{{$posts[$i]->id}}">--}}
                                                {{--<h4 class="card-title" style="text-align:center">{{$posts[$i]->title}}</h4>--}}
                                            {{--</a>--}}
                                            {{--<h>{{$posts[$i]->category->name}}</h>--}}
                                            {{--<h3 style="    margin-bottom: 4rem;">--}}
                                                {{--{!!str_limit($posts[$i]->body,35)!!}--}}
                                            {{--</h3>--}}

                                            {{--<small style="float:left">{{$posts[$i]->user->name}}</small>--}}
                                            {{--<a href="/posts/{{$posts[$i]->id}}">--}}
                                                {{--<button class="btn btn-info float-right btn-sm">مشاهده</button>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                        {{--<div class="col-md-4" >--}}
                                            {{--<div id="carbonads" style="background-color: white;" >--}}
                                                {{--<span>--}}
                                                    {{--<div class="col-md-6" style="text-align: center">--}}
                                                        {{--<img src="{{$posts[$i]->image}}" alt="" width="130rm" height="100rm" style="border-radius: 10px">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<a href="/posts/{{$posts[$i]->id}}">--}}
                                                        {{--<h4 class="card-title" style="text-align:center">{{$posts[$i]->title}}</h4>--}}
                                                        {{--</a>--}}
                                                        {{--<h>{{$posts[$i]->category->name}}</h>--}}
                                                        {{--<h style="float:left">{{$posts[$i]->user->name}}</h>--}}
                                                        {{--<h3 style="margin-top: 1rem; font-size: 15px">--}}
                                                        {{--{!!str_limit($posts[$i]->body,35)!!}--}}
                                                        {{--</h3>--}}

                                                    {{--</div>--}}
                                                {{--</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}








                                    {{--@endif--}}
                               {{--@endfor--}}


                                {{--@endforeach--}}


                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<span> {{ $posts->links( "pagination::bootstrap-4") }}</span>--}}

                        {{--<div class="item">--}}
                            {{--<div class="row" style="margin-left:0px;margin-right: 0px ">--}}


                                {{--@for($i=3;$i<6;$i++)--}}
                                    {{--@if($posts[$i])--}}
                                        {{--<div class="col-md-4">--}}
                                            {{--<div id="carbonads" style="background-color: white">--}}
                                                {{--<span>--}}
                                                    {{--<div class="col-md-6" style="text-align: center;">--}}
                                                        {{--<img src="{{$posts[$i]->image}}" alt="" width="130" height="100" style="border-radius: 10px">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<a href="/posts/{{$posts[$i]->id}}">--}}
                                                        {{--<h4 class="card-title" style="text-align:center">{{$posts[$i]->title}}</h4>--}}
                                                        {{--</a>--}}
                                                        {{--<h>{{$posts[$i]->category->name}}</h>--}}
                                                        {{--<h style="float:left">{{$posts[$i]->user->name}}</h>--}}
                                                        {{--<h3 style="margin-top: 1rem; font-size: 15px">--}}
                                                        {{--{!!str_limit($posts[$i]->body,35)!!}--}}
                                                        {{--</h3>--}}

                                                    {{--</div>--}}
                                                {{--</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--@endif--}}
                                {{--@endfor--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!-- Controls -->--}}
                    {{--<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>--}}
                    {{--<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>--}}
                {{--</div>--}}
            </div>
        </div>



        <!-- Latest Post -->
        <div class="latest-post">
            <div class="title-section">
                <h1 style="margin-right: 30px; text-align: center">آخرین اخبار</h1>
                <br>
                <h4 style="margin-right: 30px; text-align: center">با سورسیز باش و هم مسیرتو پیدا کن</h4>
            </div>

            <div id="owl-demo" style="text-align: center; padding-left:20px; padding-right:20px "  class="owl-carousel owl-theme" >
                @foreach($blogs as $blog)
                <div class="item news-item">
                    <div class="inner-item">
                        <img alt="" src="{{$blog->image}}">
                        <div class="hover-item">
                            <ul>
                                <li><a class="autor" href="#"><i class="fa fa-user"></i>{{$blog->day}}:{{$blog->created_at}}</a></li>
                              </ul>
                        </div>
                    </div>
                    <h4><a href="blog/{{$blog->id}}">{{$blog->title}}</a></h4>
                    <p>{!!str_limit($blog->body,45)!!}</p>
                    <a class="read-more" href="single-post.html"><i class="fa fa-arrow-left"></i>اطلاعات بیشتر</a>
                </div>
                    @endforeach








            </div>
        </div>

        <!-- WHY convertible box -->
        {{--<div class="why-convertible-box">--}}
            {{--<div class="container">--}}
                {{--<div class="upper-box">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6">--}}
                            {{--<h1>چرا قالب<span>&nbspکانورت</span><i class="fa fa-question-circle"></i></h1>--}}

                            {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            {{--<ul class="tag-list">--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>واکنش گرا</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>پشتیبانی</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>بهینه سازی</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>فروشگاه</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>ابزارک</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>نمونه کار</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>فونت فارسی</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>اجاکس</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>قدرتمند</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>طراحی زیبا</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>صفحه به زودی</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-check-circle"></i>ریتینا</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="down-box">--}}
                    {{--<ul class="device-list">--}}
                        {{--<li><img alt="" src="{{url('image/device1.png')}}"></li>--}}
                        {{--<li class="device2"><img alt="" src="images/device2.png"></li>--}}
                        {{--<li class="device3"><img alt="" src="images/device3.png"></li>--}}
                        {{--<li class="device4"><img alt="" src="images/device4.png"></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- client-testimonials -->--}}
        {{--<div class="testimonials-box">--}}
            {{--<div class="container">--}}
                {{--<h3>نظر مشتریان</h3>--}}
            {{--</div>--}}
            {{--<ul class="bxslider">--}}
                {{--<li>--}}
                    {{--<div class="container">--}}
                        {{--<img alt="" src="images/client.png">--}}
                        {{--<div class="message-content">--}}
                            {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</p>--}}
                            {{--<h6>جان اسمیت<span>&nbsp&nbspمدیر شرکت</span></h6>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="container">--}}
                        {{--<img alt="" src="images/client.png">--}}
                        {{--<div class="message-content">--}}
                            {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</p>--}}
                            {{--<h6>جان اسمیت<span>&nbsp&nbspمدیر شرکت</span></h6>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="container">--}}
                        {{--<img alt="" src="images/client.png">--}}
                        {{--<div class="message-content">--}}
                            {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید</p>--}}
                            {{--<h6>جان اسمیت<span>&nbsp&nbspمدیر شرکت</span></h6>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--<!-- staff-box -->--}}
        {{--<div class="staff-box">--}}
            {{--<div class="container">--}}
                {{--<h3>تیم ما</h3>--}}
                {{--<div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">--}}

                    {{--<!-- Wrapper for slides -->--}}
                    {{--<div class="carousel-inner">--}}

                        {{--<div class="item active">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="staff-post">--}}
                                        {{--<div class="staff-post-content">--}}
                                            {{--<h5>اون میلر</h5>--}}
                                            {{--<span>مدیریت</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="staff-post-gal">--}}
                                            {{--<ul class="staf-social">--}}
                                                {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>--}}
                                                {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                                {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<img alt="" src="upload/team1.jpg">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="staff-post">--}}
                                        {{--<div class="staff-post-content">--}}
                                            {{--<h5>اون میلر</h5>--}}
                                            {{--<span>مدیریت</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="staff-post-gal">--}}
                                            {{--<ul class="staf-social">--}}
                                                {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>--}}
                                                {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                                {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<img alt="" src="upload/team2.jpg">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="staff-post">--}}
                                        {{--<div class="staff-post-content">--}}
                                            {{--<h5>اون میلر</h5>--}}
                                            {{--<span>مدیریت</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="staff-post-gal">--}}
                                            {{--<ul class="staf-social">--}}
                                                {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>--}}
                                                {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                                {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<img alt="" src="upload/team3.jpg">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="staff-post">--}}
                                        {{--<div class="staff-post-content">--}}
                                            {{--<h5>اون میلر</h5>--}}
                                            {{--<span>مدیریت</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="staff-post-gal">--}}
                                            {{--<ul class="staf-social">--}}
                                                {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>--}}
                                                {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                                {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<img alt="" src="upload/team4.jpg">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="item">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="staff-post">--}}
                                        {{--<div class="staff-post-content">--}}
                                            {{--<h5>اون میلر</h5>--}}
                                            {{--<span>مدیریت</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="staff-post-gal">--}}
                                            {{--<ul class="staf-social">--}}
                                                {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>--}}
                                                {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                                {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<img alt="" src="upload/team1.jpg">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="staff-post">--}}
                                        {{--<div class="staff-post-content">--}}
                                            {{--<h5>اون میلر</h5>--}}
                                            {{--<span>مدیریت</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="staff-post-gal">--}}
                                            {{--<ul class="staf-social">--}}
                                                {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>--}}
                                                {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                                {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<img alt="" src="upload/team2.jpg">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="staff-post">--}}
                                        {{--<div class="staff-post-content">--}}
                                            {{--<h5>اون میلر</h5>--}}
                                            {{--<span>مدیریت</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="staff-post-gal">--}}
                                            {{--<ul class="staf-social">--}}
                                                {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>--}}
                                                {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                                {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<img alt="" src="upload/team3.jpg">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="staff-post">--}}
                                        {{--<div class="staff-post-content">--}}
                                            {{--<h5>اون میلر</h5>--}}
                                            {{--<span>مدیریت</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="staff-post-gal">--}}
                                            {{--<ul class="staf-social">--}}
                                                {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                                {{--<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>--}}
                                                {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                                {{--<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<img alt="" src="upload/team4.jpg">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<!-- Controls -->--}}
                    {{--<a class="left carousel-control" href="#carousel-example-generic3" data-slide="prev">--}}
                        {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
                    {{--</a>--}}
                    {{--<a class="right carousel-control" href="#carousel-example-generic3" data-slide="next">--}}
                        {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="infographic-box">--}}
            {{--<div class="container">--}}
                {{--<h3>برخی از عناصر اینفوگرافی</h3>--}}
                {{--<ul class="gender-list">--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-male"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-female"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-female"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-female"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-female"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-female"></i></a></li>--}}
                {{--</ul>--}}
                {{--<ul class="stars-list">--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                {{--</ul>--}}

                {{--<div class="skills-bar">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-2">--}}
                            {{--<div id="circle" data-percent="50"></div>--}}
                            {{--<p>نوار پیشرفت دایره ای</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2">--}}
                            {{--<div id="circle2" data-percent="39"></div>--}}
                            {{--<p>نوار پیشرفت دایره ای</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2">--}}
                            {{--<div id="circle3" data-percent="90"></div>--}}
                            {{--<p>نوار پیشرفت دایره ای</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2">--}}
                            {{--<div id="circle4" data-percent="60"></div>--}}
                            {{--<p>نوار پیشرفت دایره ای</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2">--}}
                            {{--<div id="circle5" data-percent="80"></div>--}}
                            {{--<p>نوار پیشرفت دایره ای</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2">--}}
                            {{--<div id="circle6" data-percent="45"></div>--}}
                            {{--<p>نوار پیشرفت دایره ای</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Product Box -->--}}
        {{--<div class="product-box">--}}
            {{--<div class="container">--}}
                {{--<h3>محصولات</h3>--}}
                {{--<div id="carousel-example-generic4" class="carousel slide" data-ride="carousel">--}}

                    {{--<!-- Wrapper for slides -->--}}
                    {{--<div class="carousel-inner">--}}

                        {{--<div class="item active">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="product-post">--}}
                                        {{--<div class="product-post-gal">--}}
                                            {{--<img alt="" src="upload/image1.jpg">--}}
                                            {{--<span class="price">١٢٠٠٠٠٠ تومان</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-post-content">--}}
                                            {{--<h5>آیفون</h5>--}}
                                            {{--<ul class="product-list">--}}
                                                {{--<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>--}}
                                                {{--<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                {{--<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col-md-3">--}}
                                    {{--<div class="product-post">--}}
                                        {{--<div class="product-post-gal">--}}
                                            {{--<img alt="" src="upload/image5.jpg">--}}
                                            {{--<span class="price">٢٢٠٠٠٠٠ تومان</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-post-content">--}}
                                            {{--<h5>لب تاپ</h5>--}}
                                            {{--<ul class="product-list">--}}
                                                {{--<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>--}}
                                                {{--<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                {{--<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col-md-3">--}}
                                    {{--<div class="product-post">--}}
                                        {{--<div class="product-post-gal">--}}
                                            {{--<img alt="" src="upload/image6.jpg">--}}
                                            {{--<span class="price">٦٥٠٠٠ تومان</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-post-content">--}}
                                            {{--<h5>موس بی سیم</h5>--}}
                                            {{--<ul class="product-list">--}}
                                                {{--<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>--}}
                                                {{--<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                {{--<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col-md-3">--}}
                                    {{--<div class="product-post">--}}
                                        {{--<div class="product-post-gal">--}}
                                            {{--<img alt="" src="upload/image7.jpg">--}}
                                            {{--<span class="price">١٢٠٠٠٠٠ تومان</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-post-content">--}}
                                            {{--<h5>آیپد اپل</h5>--}}
                                            {{--<ul class="product-list">--}}
                                                {{--<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>--}}
                                                {{--<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                {{--<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="item">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="product-post">--}}
                                        {{--<div class="product-post-gal">--}}
                                            {{--<img alt="" src="upload/image7.jpg">--}}
                                            {{--<span class="price">١٢٠٠٠٠٠ تومان</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-post-content">--}}
                                            {{--<h5>آیفون</h5>--}}
                                            {{--<ul class="product-list">--}}
                                                {{--<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>--}}
                                                {{--<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                {{--<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col-md-3">--}}
                                    {{--<div class="product-post">--}}
                                        {{--<div class="product-post-gal">--}}
                                            {{--<img alt="" src="upload/image6.jpg">--}}
                                            {{--<span class="price">٢٢٠٠٠٠٠ تومان</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-post-content">--}}
                                            {{--<h5>لب تاپ</h5>--}}
                                            {{--<ul class="product-list">--}}
                                                {{--<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>--}}
                                                {{--<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                {{--<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col-md-3">--}}
                                    {{--<div class="product-post">--}}
                                        {{--<div class="product-post-gal">--}}
                                            {{--<img alt="" src="upload/image5.jpg">--}}
                                            {{--<span class="price">٦٥٠٠٠ تومان</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-post-content">--}}
                                            {{--<h5>موس بی سیم</h5>--}}
                                            {{--<ul class="product-list">--}}
                                                {{--<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>--}}
                                                {{--<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                {{--<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col-md-3">--}}
                                    {{--<div class="product-post">--}}
                                        {{--<div class="product-post-gal">--}}
                                            {{--<img alt="" src="upload/image1.jpg">--}}
                                            {{--<span class="price">١٢٠٠٠٠٠ تومان</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="product-post-content">--}}
                                            {{--<h5>آیپد اپل</h5>--}}
                                            {{--<ul class="product-list">--}}
                                                {{--<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>--}}
                                                {{--<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                {{--<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!-- Controls -->--}}
                    {{--<a class="left carousel-control" href="#carousel-example-generic4" data-slide="prev"></a>--}}
                    {{--<a class="right carousel-control" href="#carousel-example-generic4" data-slide="next"></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Convertible-banner -->--}}
        {{--<div class="convertible-banner">--}}
            {{--<div class="container">--}}
                {{--<a href="#">اطلاعات بیشتر</a>--}}
                {{--<p><span></span>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- accord-tabs box -->--}}
        {{--<div class="accord-tab-box">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<h3>محتوای آکاردئونی</h3>--}}
                        {{--<div class="accordion-box">--}}

                            {{--<div class="accord-elem active">--}}
                                {{--<div class="accord-title">--}}
                                    {{--<h5><i class="fa fa-question"></i>مارکتینگ چیست</h5>--}}
                                    {{--<a class="accord-link" href="#"></a>--}}
                                {{--</div>--}}
                                {{--<div class="accord-content">--}}
                                    {{--<span class="image-content"><i class="fa fa-suitcase"></i></span>--}}
                                    {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="accord-elem">--}}
                                {{--<div class="accord-title">--}}
                                    {{--<h5><i class="fa fa-question"></i>بازاریابی</h5>--}}
                                    {{--<a class="accord-link" href="#"></a>--}}
                                {{--</div>--}}
                                {{--<div class="accord-content">--}}
                                    {{--<span class="image-content"><i class="fa fa-suitcase"></i></span>--}}
                                    {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="accord-elem">--}}
                                {{--<div class="accord-title">--}}
                                    {{--<h5><i class="fa fa-question"></i>سئو</h5>--}}
                                    {{--<a class="accord-link" href="#"></a>--}}
                                {{--</div>--}}
                                {{--<div class="accord-content">--}}
                                    {{--<span class="image-content"><i class="fa fa-suitcase"></i></span>--}}
                                    {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="accord-elem">--}}
                                {{--<div class="accord-title">--}}
                                    {{--<h5><i class="fa fa-question"></i>طراحی اختصاصی</h5>--}}
                                    {{--<a class="accord-link" href="#"></a>--}}
                                {{--</div>--}}
                                {{--<div class="accord-content">--}}
                                    {{--<span class="image-content"><i class="fa fa-suitcase"></i></span>--}}
                                    {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="accord-elem">--}}
                                {{--<div class="accord-title">--}}
                                    {{--<h5><i class="fa fa-question"></i>پنل مدیریت</h5>--}}
                                    {{--<a class="accord-link" href="#"></a>--}}
                                {{--</div>--}}
                                {{--<div class="accord-content">--}}
                                    {{--<span class="image-content"><i class="fa fa-suitcase"></i></span>--}}
                                    {{--<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-6">--}}
                        {{--<h3>معرفی پنل</h3>--}}

                        {{--<div class="tab-box">--}}
                            {{--<div class="tab-content active">--}}
                                {{--<img alt="" src="images/icon7.png">--}}
                            {{--</div>--}}
                            {{--<div class="tab-content">--}}
                                {{--<img alt="" src="images/icon7.png">--}}
                            {{--</div>--}}
                            {{--<div class="tab-content">--}}
                                {{--<img alt="" src="images/icon7.png">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<ul class="tab-links">--}}
                            {{--<li><a class="tab-link1 active" href="#"><i class="fa fa-cog"></i>پنل قدرتمند</a></li>--}}
                            {{--<li><a class="tab-link2" href="#"><i class="fa fa-picture-o"></i>ریتینا</a></li>--}}
                            {{--<li><a class="tab-link3" href="#"><i class="fa fa-leaf"></i>طراحی زیبا</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                {{--</div>--}}
            </div>
        </div>

    </div>
    <!-- End content -->



    <!-- End footer -->
</div>
<!-- End Container -->

<!--
##############################
 - ACTIVATE THE BANNER HERE -
##############################
-->
<script type="text/javascript">

    var tpj=jQuery;
    tpj.noConflict();

    tpj(document).ready(function() {

        if (tpj.fn.cssOriginal!=undefined)
            tpj.fn.css = tpj.fn.cssOriginal;

        var api = tpj('.fullwidthbanner').revolution(
            {
                delay:8000,
                startwidth:1170,
                startheight:580,

                onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

                thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                thumbHeight:50,
                thumbAmount:3,

                hideThumbs:0,
                navigationType:"bullet",				// bullet, thumb, none
                navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

                navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


                navigationHAlign:"center",				// Vertical Align top,center,bottom
                navigationVAlign:"bottom",					// Horizontal Align left,center,right
                navigationHOffset:30,
                navigationVOffset: 40,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                touchenabled:"on",						// Enable Swipe Function : on/off


                stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
                hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


                fullWidth:"on",

                shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

            });


        // TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
        // YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
        api.bind("revolution.slide.onloaded",function (e) {


            jQuery('.tparrows').each(function() {
                var arrows=jQuery(this);

                var timer = setInterval(function() {

                    if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
                        arrows.fadeOut(300);
                },3000);
            })

            jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
                jQuery('.tp-simpleresponsive').addClass("mouseisover");
                jQuery('body').find('.tparrows').each(function() {
                    jQuery(this).fadeIn(300);
                });
            }, function() {
                if (!jQuery(this).hasClass("tparrows"))
                    jQuery('.tp-simpleresponsive').removeClass("mouseisover");
            })
        });
        // END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
    });
</script>
<script>
    jQuery(function(){
        DevSolutionSkill.init('circle');
        DevSolutionSkill.init('circle2');
        DevSolutionSkill.init('circle3');
        DevSolutionSkill.init('circle4');
        DevSolutionSkill.init('circle5');
        DevSolutionSkill.init('circle6');
    });
</script>



@endsection