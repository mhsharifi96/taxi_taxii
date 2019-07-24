@extends('layouts.app')

@section('content')


    <div id="content">

        <!-- Page Banner -->

        <div class="page-banner" style="margin-top: 150px;">
            <div class="container">

                <h2>خبرها</h2>
                <ul class="page-tree">
                    <li><a href="/blog">خبرها</a></li>
                    <li><a href="/">صفحه نخست</a></li>
                </ul>
            </div>
        </div>

        <div class="blog-box with-one-col">
            <div class="container">
                <div class="row">


                    <div class="col-md-3 sidebar">
                        <div class="sidebar-widgets">
                            <div class="search-widget widget">
                                <form>
                                    <input type="search" placeholder="... جستجو "/>
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="accordion-widget widget">
                                <h5>سوالات</h5>
                                <div class="accordion-box">

                                    <div class="accord-elem active">
                                        <div class="accord-title">
                                            <h5><i class="fa fa-question"></i>سورسیز چیست</h5>
                                            <a class="accord-link" href="#"></a>
                                        </div>
                                        <div class="accord-content">
                                            <p>اولین تاکسی ذهنی در ایران</p>
                                        </div>
                                    </div>

                                    <div class="accord-elem">
                                        <div class="accord-title">
                                            <h5><i class="fa fa-question"></i>تاکسی ذهنی چیست</h5>
                                            <a class="accord-link" href="#"></a>
                                        </div>
                                        <div class="accord-content">
                                            <p>یک جمع سپاری ذهنی با رهبری شما</p>
                                        </div>
                                    </div>

                                    <div class="accord-elem">
                                        <div class="accord-title">
                                            <h5><i class="fa fa-question"></i>اهداف ما </h5>
                                            <a class="accord-link" href="#"></a>
                                        </div>
                                        <div class="accord-content">
                                            <p> اشتراک گذاری ذهن ها</p>
                                            <p>پاسخ گویی به نیاز کاربران</p>
                                            <p>تطابق ایده ها</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tags-widget widget">
                                <h5>تگ ها</h5>
                                <ul class="tag-widget-list">
                                    <li><a href="#">طراحی سایت</a></li>
                                    <li><a href="#">کدنویسی</a></li>
                                    <li><a href="#">وردپرس</a></li>
                                    <li><a href="#">سئو</a></li>
                                    <li><a href="#">php</a></li>
                                    <li><a href="#">فتوشاپ</a></li>
                                </ul>
                            </div>



                        </div>
                    </div>

                    <div class="col-md-9 blog-side">

                            @foreach($blogs as $blog)
                            {{--<div class="col-md-6">--}}
                                {{--<div class="item news-item">--}}
                                    {{--<div class="inner-item">--}}
                                        {{--<img alt="" src="{{$blog->image}}">--}}
                                        {{--<div class="hover-item">--}}
                                            {{--<ul>--}}
                                                {{--<li><a class="autor" href="#"><i class="fa fa-user"></i>موضوع</a></li>--}}
                                                {{--<li><a class="date" href="#"><i class="fa fa-clock-o"></i> ٤ آبان, ١٣٩٤</a></li>--}}
                                                {{--<li><a class="comment-numb" href="#"><i class="fa fa-comments"></i> ١٦ نظر</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<h5>{{$blog->title}}</h5>--}}
                                    {{--<p>{{$blog->body}}</p>--}}
                                    {{--<a class="read-more" href="single-post.html"><i class="fa fa-arrow-left"></i>اطلاعات بیشتر</a>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="item news-item">
                                <div class="inner-item">
                                    <img alt="" src="{{$blog->image}}" >
                                    <div class="hover-item">
                                        <ul>
                                            <li><a class="date" href="#"><i class="fa fa-clock-o"></i> {{$blog->day}}:{{$blog->created_at}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>{{$blog->title}}</h3>
                                <p>{!!str_limit($blog->body,350)!!}</p>
                                <a class="read-more" href="blog/{{$blog->id}}"><i class="fa fa-arrow-left"></i>اطلاعات بیشتر</a>
                            </div>

                             @endforeach
                                <div class="col-md-12">

                                    <div  style=" margin-left: auto; margin-right: auto; text-align: center ">
                                        <span> {{$blogs->links( "pagination::bootstrap-4") }}</span>
                                    </div>


                                </div>









                    </div>



                </div>

            </div>
        </div>






    </div>



@endsection
