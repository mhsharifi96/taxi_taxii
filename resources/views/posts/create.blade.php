@extends('layouts.app')

@section('content')
<div class="container create-class">
    <h1>درخواست تاکسی ذهنی</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
            
        <div class="col-md-6 col-12">
                <div class="form-group">
                    <div class="col-sm-12">
                        <lable for="category_id" class="control-label bold-class">دسته بندی</lable>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach(\App\Category::latest()->get() as $category)
                                <option value="{{$category->id}}" > {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12" style="order:1">
                    <div class="form-group">
                        {{Form::label('title', 'موضوع')}}
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'مقصد'])}}
                    </div>
                </div>
        
    </div>
    <div class="row">

            <div class="col-md-6 col-12">
                    <div class="form-group">
                            <lable  class="control-label bold-class">عکس</lable>  
                        {{Form::file('cover_image')}}
                    </div>
                </div>

                <div class="col-md-6 col-12" style="order:2">
                        <div class="form-group">
                            {{Form::label('tag', 'تگ ها')}}
                            {{Form::text('tag', '', ['class' => 'form-control', 'placeholder' => '#تاکسی #taxii'])}}
                        </div>
                    </div>

    </div>
        
        <div class="form-group">
            {{Form::label('body', 'توضیحات')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'تاکسی تاکسی اولین تاکسی ذهنی در ایران'])}}
        </div>
        <div>
                {{Form::submit('ارسال', ['class'=>'btn btn-primary'])}}
        </div>
        
    {!! Form::close() !!}

    

</div>
@endsection