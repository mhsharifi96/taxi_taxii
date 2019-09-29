@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
    {{--<h1>آخرین درخواست‌ها</h1>--}}
    {{----}}
    {{--<?php--}}
    {{--$pic=array('500-1.png','500-2.png','500-3.png','500-4.png','500-5.png','500-6.png','500-7.png');--}}
    {{--shuffle($pic);--}}
    {{--?>--}}






    {{--@if(count($posts) > 0)--}}

    {{----}}
    {{--<div class="container">--}}

    {{--<div class="row">--}}
    {{--@foreach($posts as $post)--}}

    {{--<div class="col-sm-6 col-md-4 col-lg-3 mt-4 mb-4 ">--}}
    {{--<div class="card  shadow">--}}
    {{--<?php--}}
    {{--$i=rand(0,count($pic)-1);--}}
    {{--?>--}}

    {{--<img style="width:100%;" src="{{url('image/'.$pic[$i].' ')}}">--}}
    {{----}}




    {{--<div class="card-block">--}}
    {{--<a href="/posts/{{$post->id}}">--}}
    {{--<h4 class="card-title" style="text-align:center">{{$post->title}}</h4>--}}
    {{--</a>--}}
    {{----}}
    {{--<div class="meta">--}}
    {{----}}
    {{--{{$post->category->name}}--}}


    {{--</div>--}}
    {{--<div class="card-text">--}}
    {{--<h3 style="    margin-bottom: 4rem;                                        ">--}}
    {{--{!!str_limit($post->body,35)!!}--}}
    {{--</h3>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-footer card-footer-fix">--}}
    {{--<small style="float:left">{{$post->user->name}}</small>--}}
    {{--<a href="/posts/{{$post->id}}">--}}
    {{--<button class="btn btn-info float-right btn-sm">مشاهده</button>--}}
    {{--</a>--}}
    {{----}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{----}}
    {{----}}
    {{----}}
    {{----}}
    {{----}}
    {{--@endforeach--}}

    {{--</div>--}}
    {{--</div>--}}
    {{-- </section> --}}
    {{--<div class="col-md-12">--}}
    {{--<div class="col-md-3" style=" margin-left: auto; margin-right: auto;">--}}
    {{--<span> {{ $posts->links( "pagination::bootstrap-4") }}</span>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--@else--}}
    {{--<div style="min-height: 50vh">پستی یافت نشد</div>--}}
    {{--@endif--}}
    {{--</div>--}}




































    <div id="content" style="  background-color: white">

        <!-- Page Banner -->
        <div class="page-banner" style="margin-top: 150px;">
            <div class="container">
                <form class="form-inline" action="/search" method="get" style="text-align: left">
                    <input class="form-control  form-control-search  " type="text" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success " type="submit">جست‌وجو</button>
                </form>
                <ul class="page-tree">
                    <li><a href="#">درخواست ها</a></li>
                    <li><a href="index.html">صفحه نخست</a></li>

                </ul>
            </div>
        </div>

        <div class="portfolio-box with-4-col" >
            <div class="container">
                <ul class="filter">
                    <li><a href="#" data-filter=".web-design">برنامه نویسی</a></li>
                    <li><a href="#" data-filter=".photography">عکاسی</a></li>
                    <li><a href="#" data-filter=".nature">فتوشاپ</a></li>
                    <li><a href="posts/ورزشی">ورزشی</a></li>
                    <li><a href="#" data-filter=".brochures">بروشور</a></li>
                    <li><a href="#" data-filter=".website">طراحی سایت</a></li>
                    <li><a href="#" class="active" data-filter="*"><i class="fa fa-th"></i>نمایش همه</a></li>
                </ul>

                @if(count($posts) > 0)
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">

                                    @foreach($posts as $post)

                                        <div class="col-md-3" >
                                            <div class="work-post">
                                                <div class="work-post-gal">
                                                    <img alt="" src="upload/image1.jpg">
                                                    <div class="hover-box">
                                                        <a class="zoom video" href="http://www.youtube.com/watch?v=XSGBVzeBUbk"></a>
                                                        <a class="page" href="single-project.html"></a>
                                                    </div>
                                                </div>
                                                <div class="work-post-content" style="background-image: linear-gradient(to top, rgba(0,0,0,.08), rgba(255,255,255,.08));">
                                                    <a href="/posts/{{$post->id}}">
                                                        <h4 class="card-title" style="text-align:center">{{$post->title}}</h4>
                                                    </a>
                                                    <h>{{$post->category->name}}</h>
                                                    <h3 style="    margin-bottom: 4rem;">
                                                        {!!str_limit($post->body,35)!!}
                                                    </h3>

                                                    <small style="float:left">{{$post->user->name}}</small>
                                                    <a href="/posts/{{$post->id}}">
                                                        <button class="btn btn-info float-right btn-sm">مشاهده</button>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                    @endforeach




                                </div>
                            </div>
                        </div>




                        <div class="col-md-12">

                            <div  style=" margin-left: auto; margin-right: auto; text-align: center ">
                                {{--<span> {{ $posts->links( "pagination::bootstrap-4") }}</span>--}}
                            </div>


                        </div>
                        {{--<ul class="pagination-list">--}}
                        {{--<li><a class="active" href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">4</a></li>--}}
                        {{--<li><a href="#">5</a></li>--}}
                        {{--</ul>--}}
                    </div>

                @else
                    <div style="min-height: 50vh">پستی یافت نشد</div>
                @endif
            </div>

        </div>





@endsection













