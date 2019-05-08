@extends('layouts.app')

@section('content')
    <h1>ارتباط با ما</h1>
    {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'email'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'body'])}}
    </div>


    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}



@endsection
