@extends('layouts.app')

@section('content')
<div class="container">
    <h1>آخرین درخواست‌ها</h1>
     {{--<div class="page-header head-section">--}}
        {{--<div class="well">--}}
            {{--<h>جست و جو</h>--}}
            {{--<div class="input-group">--}}
                {{--<form class="search-form" action="/search" method="get">--}}
                    {{--<input type="text" style="width:79%" name="search" class="form-control">--}}
                    {{--<div class="input-group-btn">--}}
                        {{--<button class="btn btn-default" type="submit">--}}
                            {{--<span class="glyphicon glyphicon-search"></span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div> --}}
    <?php
        $pic=array('500-1.png','500-2.png','500-3.png','500-4.png','500-5.png','500-6.png','500-7.png');
        shuffle($pic);
    ?>






    @if(count($posts) > 0)

            {{-- <section class="blog-area section"> --}}
                <div class="container">

                    <div class="row">
                        @foreach($posts as $post)

                        <div class="col-sm-6 col-md-4 col-lg-3 mt-4 mb-4 ">
                            <div class="card  shadow">
                                {{-- <img class="card-img-top" src="https://picsum.photos/200/150/?random"> --}}
                                {{--<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">--}}
                               <?php
                                $i=rand(0,count($pic)-1);
                                ?>

                                    <img style="width:100%;" src="{{url('image/'.$pic[$i].' ')}}">
                                    {{--<img style="width:100%" src="/image/$pic[$i]">--}}




                                <div class="card-block">
                                    <a href="/posts/{{$post->id}}">
                                        <h4 class="card-title" style="text-align:center">{{$post->title}}</h4>
                                    </a>
                                    
                                    <div class="meta">
                                        {{-- <a href="#">{{$post->category->name}}</a> --}}
                                        {{$post->category->name}}


                                    </div>
                                    <div class="card-text">
                                        <h3 style="    margin-bottom: 4rem;                                        ">
                                            {!!str_limit($post->body,35)!!}
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-footer card-footer-fix">
                                    <small style="float:left">{{$post->user->name}}</small>
                                    <a href="/posts/{{$post->id}}">
                                        <button class="btn btn-info float-right btn-sm">مشاهده</button>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>




                        {{-- <div class=" col-md-3">
                            <div class="shadow">
                                <div class="single-post post-style-1" style="padding-bottom: 10px">

                                    <div class="blog-image"><img  class="center-block   " style="width:92%;height:92px;margin:0 auto;padding-top: 5px; border-radius:6px ;" src="/storage/cover_images/{{$post->cover_image}}"> </div>

                                    <div class="blog-info">
                                        <h4 class="title">
                                            <a href="#">
                                                <b style="text-align: center">
                                                    <h3>
                                                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                                    </h3>
                                                    <h3 style="word-break: break-all;font-size: 15px;">{!!str_limit($post->body,35)!!}</h3>
                                                    <h5>مربوط به دسته ی:   {{$post->category->name}}</h5>
                                                </b>


                                            </a>
                                        </h4>
                                    </div><!-- blog-info -->
                                </div><!-- single-post -->
                            </div><!-- card -->
                        </div><!-- col-lg-3 col-md- --> --}}
                            
                        {{-- add new card --}}

                        
                       
                            
                        
                        @endforeach

                    </div>
                </div>
            {{-- </section> --}}
            <div class="col-md-12">
                <div class="col-md-3" style=" margin-left: auto; margin-right: auto;">
                    <span> {{ $posts->links( "pagination::bootstrap-4") }}</span>
                </div>

            </div>
    @else
        <div style="min-height: 50vh">پستی یافت نشد</div>
    @endif
</div>
@endsection












