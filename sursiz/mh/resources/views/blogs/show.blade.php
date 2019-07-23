@extends('layouts.app')

@section('content')
    <div id="content">

        <!-- Page Banner -->
        <div class="page-banner" style="margin-top: 150px;">
            <div class="container">
                <h2>خبرها</h2>
                <ul class="page-tree">
                    <li><a href="{{$blog->id}}">{!!str_limit($blog->title,15)!!}</a></li>
                    <li><a href="/blog">خبرها</a></li>
                    <li><a href="/">صفحه نخست</a></li>
                </ul>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-md-1"></div>
        <div class=" col-md-10 well-blog">
            <div class="row">
            <div class=" col-md-12 ">
                <div class="col-md-3 pull-right show-place " style="text-align: center">
                    <img src="../{{$blog->image}}"  class="img-responsive img-thumbnail">

                    <div class="col-xs-12" style="padding-top:20px ">
                        <span>برچسب ها: </span>
                        <span class="tag">
                                    <a href="/course/tag/آیلتس" title="ییی" class="label label-default" target="_blank">{{$blog->tag}}</a>
                                </span>


                    </div>
                </div>
                <div class="col-md-9">
                    <h1 class="panel-title mgb-15">{{$blog->title}}</h1>
                    <p >
                        <span class="font-farsi"><i class="fa fa-calendar"></i> {{$blog->day}}:{{$blog->created_at}}</span>
                    </p>
                    <div class="parent-p">
                        <p>
                            {{$blog->body}}
                        </p>

                    </div>
                </div>


            </div>
            </div>



        </div>
    <div class="col-md-1"></div>

</div>












@endsection