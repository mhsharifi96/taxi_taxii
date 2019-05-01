@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('tag', 'tag')}}
            {{Form::text('tag', '', ['class' => 'form-control', 'placeholder' => 'tag'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <lable for="category_id" class="control-label">دسته ها</lable>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach(\App\Category::latest()->get() as $category)
                        <option value="{{$category->id}}" > {{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection