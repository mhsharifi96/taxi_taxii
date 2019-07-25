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
        <div class=" col-md-10 ">
            <div class="row well-blog pull-right show-place" >
                    <div class="col-md-4  " style="text-align: center">
                        <img src="../{{$blog->image}}"  class="img-responsive img-thumbnail">


                    </div>
                    <div class="col-md-8">
                        <h1 class="panel-title mgb-15">{{$blog->title}}</h1>
                        <?php
                        $temp = explode(' ',$blog->created_at);
                        ?>
                        <p>
                            <span class="font-farsi"> {{ $temp[0]}} <i class="fa fa-calendar"></i></span>
                        </p>
                        <div class="parent-p">
                            <p>
                                {{$blog->body}}
                            </p>

                        </div>
                        <div style="padding-top:20px ">
                            <span>تگ ها: </span>
                            <span class="tag">
                                <a href="../blog/{{$blog->id}}" title="ییی" class="label label-default" target="_blank">{{$blog->tag}}</a>
                            </span>


                        </div>
                    </div>



            </div>



        </div>
    <div class="col-md-1"></div>

</div>












@endsection