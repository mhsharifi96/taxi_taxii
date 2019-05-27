@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <a href="/posts" class="btn btn-default">بازگشت</a> --}}
    <?php
    $pic=array('500-1.png','500-2.png','500-3.png','500-4.png','500-5.png','500-6.png','500-7.png');
    shuffle($pic);
    ?>

    <?php
    $i=rand(0,count($pic)-1);
    ?>


    <h1>{{$post->title}}</h1>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                    {!!$post->body!!}
            </div>
            <div class="col-md-4">
                    {{-- <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"> --}}
                    <div class="col-md-12">

                        {{--<img style="width:100%" class="card-img-top" src="{{url('image/noimage.jpg ')}}">--}}
                        <img style="width:100%;" src="{{url('image/'.$pic[$i].' ')}}">
                    </div>
                @if(!$post->account  ==null)
                    <div class="col-md-12">
                        <p style="text-align:center">
                            ایدی/ایمیل مسافر:
                            @if(!Auth::guest())

                            <span>
                            {{$post->account}}
                            </span>

                            @else
                            <p class="alarm-account">برای مشاهده ابتدا در سایت عضو شوید :/</p>
                            @endif
                        </p>
                    </div>
                @endif
                    
            </div>
        </div>
    </div>
    
    <hr>
    <small>{{$post->created_at}}</small>
    <small>درخواست توسط {{$post->user->name}}</small>
    {{-- <hr> --}}
    {{--@if(!Auth::guest())--}}
        {{--@if(Auth::user()->id == $post->user_id)--}}
            {{--<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>--}}

            {{--{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}--}}
                {{--{{Form::hidden('_method', 'DELETE')}}--}}
                {{--{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}--}}
            {{--{!!Form::close()!!}--}}
        {{--@endif--}}
    {{--@endif--}}
    @if(!$post->account  ==null)
    @if(!Auth::guest())
        <small>آیدی: {{$post->account}}</small>
    @endif
    @endif

    <hr>
    {{-- <h1>نظر خود را وارد کنید</h1> --}}
    <div class="row">
            <div class="col-md-8 offset-md-2" style="padding-top:2%;margin:auto">
                    {{-- <h3><small>نظرات</small></h3> --}}
            
                    <!-- Tabs with icons on Card -->
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-primary">
                            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                                <a class="nav-link active" href="#messages" data-toggle="tab">
                                                    {{-- <i class="material-icons">chat</i> --}}
                                                    دیدگاه‌
                                                </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link " href="#profile" data-toggle="tab">
                                                    ارسال دیدگاه
                                                
                                            </a>
                                        </li>
                                        
                                        
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="#settings" data-toggle="tab">
                                                <i class="material-icons">build</i>
                                                Settings
                                            </a>
            
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="tab-content text-center">
                                
                                <div class="tab-pane" id="profile">
                                    @if(!Auth::guest())
                                    <h1>دیدگاه خود را وارد کنید</h1>
                                    {!! Form::open(['action' => 'CommentController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                    {{--<div class="form-group">--}}
                                        {{--{{Form::label('name', 'name')}}--}}
                                        {{--{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{Form::label('email', 'email')}}--}}
                                        {{--{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'email'])}}--}}
                                    {{--</div>--}}
                                        <div class="form-group">
                                            <input type="hidden" name="comment_body" class="form-control" />
                                            <input type="hidden" name="user_id" value="{{ $user->id }}" />
                                        </div>
                                    <div class="form-group">
                                        {{Form::label('body', 'دیدگاه')}}
                                        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'دیدگاه'])}}
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="comment_body" class="form-control" />
                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                    </div>
                                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                                    {!! Form::close() !!}
                                    @else
                                    <div class="col-md-12">
                                        <p>
                                            برای ثبت نظر <a href="/register">عضو شوید</a>
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                    @endif
            
                                </div>
                                <div class="tab-pane active" id="messages">
                                        {{-- @foreach($comments as $comment)
                                        <h4>{{$comment->title}}</h4>
                                        <h5>{!! $comment->body!!}</h5>
                                        @endforeach --}}
                                        @if(count($comments)>0)
                                        @foreach($comments as $comment)
                                        <div class="media comment-box">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    {{-- <h4 class="">{{$comment->title}}</h4> --}}
                                                    <h4 class="media-heading">{{$comment->user->name}}</h4>
                                                    <h5>{!! $comment->body!!}</h5>
                                                    {{-- <p>sdfsdf</p> --}}
                                                  
                                                </div>
                                            </div>
                                        @endforeach
                                        @else
                                        <p>متاسفانه دیدگاهی برای نمایش وجود ندارد
                                            <img src="{{url('/image/sad.png')}}" alt="surena" style="width: 64px;">
                                        </p>
                                        
                                        @endif
                                        
                                </div>
                                {{-- <div class="tab-pane" id="settings">
                                    <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                </div> --}}
                            </div>
                        </div></div>
                    <!-- End Tabs with icons on Card -->
            
                </div>
    </div>
    
</div>


   

@endsection