@extends('layouts.app')

@section('content')
    {{--<h1>ارتباط با ما</h1>--}}
    {{--{!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}--}}
    {{--<div class="form-group">--}}
        {{--{{Form::label('name', 'name')}}--}}
        {{--{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{{Form::label('email', 'email')}}--}}
        {{--{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'email'])}}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{{Form::label('body', 'body')}}--}}
        {{--{{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'body'])}}--}}
    {{--</div>--}}


    {{--{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}--}}
    {{--{!! Form::close() !!}--}}



{{--@endsection--}}

{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<!------ Include the above in your HEAD tag ---------->

{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">--}}
<div class=" row container">

    <div class="col-md-6">
        <div>


            <!--Form with header-->

            {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="card border-primary rounded-0">
                    <div class="card-header p-0" style="margin-top: 10px;">
                        <div class="bg-info text-white text-center py-2">
                            <h3 style="text-align: center"><i class="fa fa-envelope"></i>تماس با ما  </h3>
                            <p class="m-0" style="text-align: center">پیام های خود را برایمان بفرستید.</p>
                        </div>
                    </div>
                    <div class="card-body p-3">

                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                {{--{{Form::label('name', 'name')}}--}}
                                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'email'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                </div>
                                {{Form::text('body', '', ['class' => 'form-control', 'placeholder' => 'body'   ])}}

                            </div>
                        </div>

                        <div class="text-center">
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                             </div>
                    </div>

                </div>
        {!! Form::close() !!}

        <!--Form with header-->


        </div>
    </div>

   <div class="container col-md-6" style="margin-top:20px;">
        <h>آدرس ما:</h>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.8338219080724!2d51.427879014114104!3d33.99680192809938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f96835f4c7a48ad%3A0xe09c49069f9c40d7!2z2YXYsdqp2LIg2LHYtNivINmI2KfYrdiv2YfYp9uMINmB2YbYp9mI2LEg2K_Yp9mG2LTar9in2Ycg2qnYp9i02KfZhg!5e0!3m2!1sen!2s!4v1557991437429!5m2!1sen!2s" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

   </div>
</div>

    <div class="well">
        <div class="col-xs-12 mgt-15">
            <h3 class="panel-title" style="text-align: center">
                <i class="fa fa-map-marker"></i>
                آدرس
            </h3>
            <h5 style="text-align: center">
                کاشان-بلوار مادر-مرکز رشد دانشگاه کاشان
            </h5>

        </div>
        <div class="row" style="text-align: center">
            <div class="col-md-6" >
                <h3 class="panel-title"  >
                    <i class="fa fa-phone"></i>
                    شماره تماس
                </h3>
                <p class="font-farsi">03155579059-09132645786</p>
            </div>
            <div class="col-md-6">
                <h3 class="panel-title">
                    <i class="fa fa-envelope"></i>
                    ایمیل
                </h3>
                <p>
                     mnxcxnmxcn
                </p>
            </div>
        </div>
    </div>


@endsection

