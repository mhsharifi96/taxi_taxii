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
                                <form action="/search" method="get">
                                    <input  placeholder=" ...جستجو " type="search" name="search"  aria-label="Search">
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
                                            <h5><img src="image/question-solid.png" height="15px">سورسیز چیست</h5>
                                            <a class="accord-link" href="#"></a>
                                        </div>
                                        <div class="accord-content">
                                            <p>اولین تاکسی ذهنی در ایران</p>
                                        </div>
                                    </div>

                                    <div class="accord-elem">
                                        <div class="accord-title">
                                            <h5><img src="image/question-solid.png" height="15px">تاکسی ذهنی چیست</h5>
                                            <a class="accord-link" href="#"></a>
                                        </div>
                                        <div class="accord-content">
                                            <p>یک جمع سپاری ذهنی با رهبری شما</p>
                                        </div>
                                    </div>

                                    <div class="accord-elem">
                                        <div class="accord-title">
                                            <h5>  <img src="image/question-solid.png" height="15px">اهداف ما  </h5>
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
                                    <a href="/" title="ییی" class="label label-default" target="_blank">sursiz</a>
                                    <a href="/" title="ییی" class="label label-default" target="_blank">تاکسی ذهنی</a>
                                    <a href="/posts" title="ییی" class="label label-default" target="_blank">درخواست</a>
                                    <a href="/blog" title="ییی" class="label label-default" target="_blank">وبلاگ</a>
                                </ul>
                            </div>



                        </div>
                    </div>

                    <div class="col-md-9 blog-side">

                            @foreach($blogs as $blog)
                            <div class="item news-item">
                                <div class="inner-item">
                                    <img alt="" src="{{$blog->image}}" >
                                    <div class="hover-item">
                                        <?php
                                        $temp = explode(' ',$blog->created_at);
                                        ?>
                                        <ul>
                                            <li><a class="date" href="#"><i class="fa fa-clock-o"></i> {{$blog->day}} : {{$temp[0]}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a href="blog/{{$blog->id}}">{{$blog->title}}</a></h4>
                                <p style="margin-top: 10px">{!!str_limit($blog->body,350)!!}</p>
                                <a class="read-more" href="blog/{{$blog->id}}" >اطلاعات بیشتر</a>
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
