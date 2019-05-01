@extends('layouts.app')

@section('content')
    <h1>ساخت دسته ها</h1>
    {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('slug', 'slug')}}
        {{Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'slug'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}



{{--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">--}}
    {{--<div class="page-header head-section">--}}
        {{--<h>ایجاد آدرس</h>--}}
    {{--</div>--}}
    {{--<form class="form-horizontal" action="{{route('categories.store')}}" method="post">--}}
        {{--{{csrf_field()}}--}}
        {{--@if(count($errors)>0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li>{{$error}}</li>--}}
                {{--@endforeach--}}
            {{--</div>--}}

        {{--@endif--}}

        {{--<div class="form-group">--}}
            {{--<div class="col-sm-12">--}}
                {{--<lable for="name" class="control-label">نام</lable>--}}
                {{--<input type="text" class="form-control" name="name" id="name" placeholder=" دسته را را وارد کنید" value="{{old('city')}}">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{----}}


        {{--<div class="form-group">--}}
            {{--<div class="col-sm-12">--}}
                {{--<button type="submit" class="btn btn-danger"> ارسال</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}



@endsection
