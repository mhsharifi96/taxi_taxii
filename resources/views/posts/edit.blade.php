@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ویرایش درخواست</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
            <div class="col-md-6 col-12">
                    <div class="form-group">
                        {{Form::label('title', 'موضوع')}}
                        
                        {{Form::text('title',$post->title, ['class' => 'form-control', 'placeholder' => 'هدف'])}}
                    </div>
                </div>
                <div class="col-md-6 col-12" style="order:2">
                        <div class="form-group">
                            {{Form::label('tag', 'تگ ها')}}
                            {{Form::text('tag',$post->tag, ['class' => 'form-control','id' =>'form-tags-3', 'placeholder' => '#تاکسی #taxii'])}}
                        </div>
                    {{-- <label>Tags input with various validation:</label>
                    <input id="form-tags-3" name="tags-3" type="text" value=""> --}}
                    </div>
    </div>

    <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <div class="col-sm-12">
                        {{-- <lable for="category_id" class="control-label bold-class">دسته بندی</lable>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach(\App\Category::latest()->get() as $category)
                                <option value="{{$category->id}}" > {{$category->name}}</option>
                            @endforeach
                        </select> --}}
                            <lable for="category_id" class="control-label">دسته</lable>
                        <select class="form-control" name="category_id" id="school_id">
                            @foreach(\App\Category::latest()->get() as $category)
                                <option value="{{$category->id}}" > {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
        <div class="col-md-6 col-12" >
            <div class="form-group">
                {{Form::label('account', 'آیدی/ایمیل')}}
                {{Form::text('account',$post->account, ['class' => 'form-control','id' =>'form-tags-3', 'placeholder' => 'آیدی فضای مجازی'])}}
            </div>    
        </div>
    
        {{-- <label>Tags input with various validation:</label>
        <input id="form-tags-3" name="tags-3" type="text" value=""> --}}
    </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                            <lable  class="control-label bold-class">عکس</lable>  
                        {{Form::file('cover_image')}}
                    </div>
                </div>
            <div class="col-md-6">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('ذخیره', ['class'=>'btn btn-primary'])}}
            </div>
        </div>
        
        
        {{-- <div class="form-group">
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
        </div> --}}
        
    {!! Form::close() !!}
</div>
@endsection