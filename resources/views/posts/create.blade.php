@extends('layouts.app')

@section('content')
<div class="container create-class">
    <h1>درخواست تاکسی ذهنی</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
            <div class="col-md-6 col-12">
                    <div class="form-group">
                        {{Form::label('title', 'موضوع')}}
                        
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'مقصد'])}}
                    </div>
                </div>
                <div class="col-md-6 col-12" style="order:2">
                        <div class="form-group">
                            {{Form::label('tag', 'تگ ها')}}
                            {{Form::text('tag', '', ['class' => 'form-control','id' =>'form-tags-3', 'placeholder' => '#تاکسی #taxii'])}}
                        </div>
                    {{-- <label>Tags input with various validation:</label>
                    <input id="form-tags-3" name="tags-3" type="text" value=""> --}}
                    </div>
    </div>
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


        <div class="col-md-6 col-12">
            <div class="form-group">
                <lable  class="control-label bold-class">عکس</lable>
                {{Form::file('cover_image')}}
            </div>
        </div>



    </div>
            {{--<select name="tags[]" id="tags" class="form-control" multiple>--}}
                {{--<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">--}}
                    {{--{!! Form::label('tags', 'Tag', ['class' => 'col-md-2 control-label']) !!}--}}
        {{----}}
                    {{--<div class="col-md-8">--}}
                        {{--{!! Form::select('tags[]', $tags, $tag, ['class' => 'form-control select2-tags', 'required', 'multiple']) !!}--}}
        {{----}}
                        {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('tags') }}</strong>--}}
                {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}

    </div>
    <div class="col-md-6 col-12" style="order:2">
        <div class="form-group">
            {{Form::label('account', 'آدیدی فضای مجازی')}}
            {{Form::text('account', '', ['class' => 'form-control','id' =>'form-tags-3', 'placeholder' => 'آیدی فضای مجازی'])}}
        </div>
        {{-- <label>Tags input with various validation:</label>
        <input id="form-tags-3" name="tags-3" type="text" value=""> --}}
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