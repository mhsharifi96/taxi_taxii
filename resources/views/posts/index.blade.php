@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="page-header head-section">
        <div class="well">
            <h>جست و جو</h>
            <div class="input-group">
                <form class="search-form" action="/search" method="get">
                    <input type="text" style="width:79%" name="search" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(count($posts) > 0)

            <section class="blog-area section">
                <div class="container">

                    <div class="row">
                        @foreach($posts as $post)
                        <div class=" col-md-3">
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
                        </div><!-- col-lg-4 col-md-6 -->
                        @endforeach
                    </div>
                </div>
            </section>







            {{--<div class="well">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-4 col-sm-4">--}}
                        {{--<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-8 col-sm-8">--}}
                        {{--<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>--}}
                        {{--<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>--}}
                        {{--<h3>{{$post->tag}}</h3>--}}
                        {{--<h3>{{$post->category->name}}</h3>--}}
                        {{--<h3>{!!str_limit($post->body, 60)!!}</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--{{$posts->links()}}--}}
    @else
        <p>No posts found</p>
    @endif
@endsection












