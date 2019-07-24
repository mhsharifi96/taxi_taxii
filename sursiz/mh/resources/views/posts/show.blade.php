@extends('layouts.app')

@section('content')


<div id="content">

    <!-- Page Banner -->
    <div class="page-banner" style="margin-top: 150px;">
        <div class="container">
            <h2>درخواست</h2>
            <ul class="page-tree">
                <li><a href="{{$post->id}}">{!!str_limit($post->title,15)!!}</a></li>
                <li><a href="/posts">درخواست ها</a></li>
                <li><a href="/">صفحه نخست</a></li>
            </ul>
        </div>
    </div>

    <!-- blog-box Banner -->
    <?php
//    $pic=array('500-1.png','500-2.png','500-3.png','500-4.png','500-5.png','500-6.png','500-7.png');
    $pic=array('13.png','14.png','22.png','33.png','44.png','55.png','66.png');
    shuffle($pic);
    ?>
    <?php
    $i=rand(0,count($pic)-1);
    ?>

    <div class="single-project-page">
        <div class="container">
            <div class="row">

                <div class="col-md-9">

                    <?php
                    $picture=array('1.png','2.png','3.png','4.png','5.png','6.png');
                    shuffle($picture);
                    ?>
                    <?php
                    $j=rand(0,count($picture)-1);
                    ?>



                    <div class="card_post" style="box-shadow: 5px 5px 5px grey;">
                        <div class="row ">

                            <div class="col-md-5">
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <img class="d-block" src="{{url('image/'.$picture[$j].' ')}}" alt="" height="200px" width="350px">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 px-3">
                                <div class="card-block px-6" >

                                    <p class="card-text1" >
                                        مقصد:  {{$post->title}}
                                      </p>
                                    <p class="card-text" style="margin-right: 150px">درخواست توسط: {{$post->user->name}} </p>
                                    <p class="card-text" style="margin-right: 150px"> تاریخ ایجاد درخواست : {{$post->created_at}}</p>
                                    @if(!$post->account  ==null)
                                        <div class="card-text" style="margin-right:150px">

                                            ایدی/ایمیل مسافر:
                                            @if(!Auth::guest())
                                                <span>
                                            {{$post->account}}
                                        </span>

                                            @else
                                                برای مشاهده ابتدا در سایت عضو شوید :/
                                            @endif

                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Carousel start -->

                            <!-- End of carousel -->
                        </div>
                    </div>


                    <div class="card_des" style="box-shadow: 5px 5px 5px grey;">
                      <div class="row">

                          <h4 style="margin-right: 20px">
                        :      توضیحات
                          </h4>
                          <h1 style="margin-right: 30px;">
                              {!!$post->body!!}
                          </h1>


                      </div>

                    </div>
                </div>

                <div class="col-md-3 sidebar">
                    <div class="sidebar-widgets">

                        <div class="search-widget widget" style="margin-top: 20px">
                            <form action="/search" method="get">
                                <input  placeholder="جستجو... " type="search" name="search"  aria-label="Search">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="tags-widget widget">
                            <h5>تگ ها</h5>
                            <ul class="tag-widget-list">
                                <?php  $x=explode(",", $post->tag);
                                ?>

                                @for($i=0;$i<count($x);$i++)
                                <li><a href="#"><?php echo $x[$i] ?></a></li>
                                @endfor
                                    <li><a href="#">درخواست ها</a></li>
                                    <li><a href="#">دسته ها</a></li>


                            </ul>
                        </div>






                    </div>
                </div>




            </div>

            <div class="latest-projects">
                <h3 style="margin-top: 50px">آخرین پروژه ها</h3>
                <div class="row">

                    @foreach($posts as $p)
                     <div class="col-md-4">
                        <div id="carbonads">
                            <span>
                                <div class="col-md-6" style="text-align: center">
                                    <img src="../{{$p->image}}" alt="" width="130" height="100" style="border-radius: 10px">
                                </div>
                                <div class="col-md-6">
                                    <a href="/posts/{{$p->id}}">
                                    <h4 class="card-title" style="text-align:center">{{$p->title}}</h4>
                                    </a>
                                    <h>{{$p->category->name}}</h>
                                    <h style="float:left">{{$p->user->name}}</h>
                                    <h3 style="margin-top: 1rem; font-size: 15px">
                                    {!!str_limit($p->body,35)!!}
                                    </h3>

                                </div>
                            </span>
                        </div>
                    </div>

                        @endforeach





                </div>
            </div>



            <div class="comment-section">
                <h3 style="margin-top:40px ">نظرات </h3>

                <ul class="comment-tree">
                    @if(count($comments)>0)
                        @foreach($comments as $comment)
                            <li>
                                <div class="comment-box">
                                    <img alt="" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                    <div class="comment-content">
                                        <h6>{{$comment->user->name}}</h6>
                                        <p>{!! $comment->body !!}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <p>متاسفانه دیدگاهی برای نمایش وجود ندارد
                            <img src="{{url('/image/sad.png')}}" alt="surena" style="width: 64px;">
                        </p>
                    @endif


                </ul>
            </div>

            <div class="leave-comment">
                @if(!Auth::guest())
                    <h3>گذاشتن نظر</h3>
                    <form class="comment-form" action="{{route('comments.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">

                            <div class="form-group">
                                <input type="hidden" name="comment_body" class="form-control" >
                                <input type="hidden" name="user_id" value="{{ $user->id }}" >
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="name" id="name" value="{{$user->name}}">
                                <input type="text" name="email" value="{{$user->email}}">
                                <input type="text" name="website" placeholder="وب سایت">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="comment_body" class="form-control" >
                                <input type="hidden" name="post_id" value="{{ $post->id }}" >
                            </div>

                            <div class="col-md-8">
                                {{--<input type="text" id="body" placeholder="متن نظر" name="body">--}}
                                <textarea placeholder="متن نظر" id="body"  name="body"></textarea>
                                <input type="submit" value="ارسال">
                            </div>

                        </div>
                    </form>
                @else
                    <div class="col-md-12">
                        <h2>
                            برای ثبت نظر <a href="/register">عضو شوید</a>
                        </h2>
                        <p>
                        </p>
                    </div>
                @endif

            </div>

        </div>
    </div>

</div>



@endsection