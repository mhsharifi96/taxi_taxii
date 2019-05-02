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
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <h3>{{$post->tag}}</h3>
                        <h3>{{$post->category->name}}</h3>
                    </div>
                </div>
            </div>
        @endforeach
        {{--{{$posts->links()}}--}}
    @else
        <p>No posts found</p>
    @endif
@endsection