@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('tag', 'tag')}}
            {{Form::text('tag', $post->tag, ['class' => 'form-control', 'placeholder' => 'Tag'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <lable for="category_id" class="control-label">دسته</lable>
                <select class="form-control" name="category_id" id="school_id">
                    @foreach(\App\Category::latest()->get() as $category)
                        <option value="{{$category->id}}" > {{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection