@extends('layouts.app')

@section('content')
    <div id="content" style="margin-top: 150px ; background-color: white">

        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container">
                <h2>تماس با ما</h2>
                <ul class="page-tree">
                    <li><a href="#">تماس با ما</a></li>
                    <li><a href="index.html">صفحه نخست</a></li>

                </ul>
            </div>
        </div>

        <!-- Map box -->




        <!-- contact box -->
        <div class="contact-box">
            <div class="container">
                <div class="row" style="margin-bottom: 20px">


                    <div class="col-md-6">
                        <div>
                            <!--Form with header-->

                            {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="card border-primary rounded-0">
                                <div class="card-header p-0" style="margin-top: 10px;">
                                    <div class="bg-info text-white text-center py-2">
                                        <h3 style="text-align: center"> تماس با ما <i class="fa fa-envelope"></i></h3>
                                        <p class="m-0" style="text-align: center">پیام های خود را برایمان بفرستید</p>
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

                                    <div class="text-center" style="margin-bottom: 10px">
                                        {{Form::submit('ثبت', ['class'=>'btn btn-primary'])}}
                                    </div>
                                </div>

                            </div>
                        {!! Form::close() !!}

                        <!--Form with header-->


                        </div>
                    </div>


                    <div class="container col-md-6" style="margin-top:20px " >
                        <h>:آدرس ما</h>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.8338219080724!2d51.427879014114104!3d33.99680192809938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f96835f4c7a48ad%3A0xe09c49069f9c40d7!2z2YXYsdqp2LIg2LHYtNivINmI2KfYrdiv2YfYp9uMINmB2YbYp9mI2LEg2K_Yp9mG2LTar9in2Ycg2qnYp9i02KfZhg!5e0!3m2!1sen!2s!4v1557991437429!5m2!1sen!2s" width="100%" height="335" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>






                </div>
            </div>
        </div>

    </div>


@endsection

