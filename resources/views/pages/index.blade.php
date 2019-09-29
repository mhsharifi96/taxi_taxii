@extends('layouts.app')

@section('content')
    



<!-- Container -->
<div id="container">
    <!-- Header ================================================== -->

    

    <div class="container--head">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="upload/slider-revolution/321.jpg" alt="تاکسی ذهنی" style="width:100%;min-height:20em">
                    <div class="carousel-caption" style="text-align: left;margin-bottom:50px">
                        @if (Auth::guest())
                        <a  href="{{ url('login')}}" style="color: white; background-color:#1F646C; padding: 10px 10px 10px 10px; ">شروع کنید</a>
                        @else<a href="{{ url('dashboard')}}" style="padding: 5px 5px 5px 5px; font-size: x-large">شروع کن</a>
                            @endif
                    </div>
                </div>
                <div class="item">
                    <img src="upload/slider-revolution/99.jpg" alt="سورسیز" style="width:100%;min-height:20em">
                </div>
                <div class="item">
                    <img src="upload/slider-revolution/82.jpg" alt="sursiz" style="width:100%;min-height:20em">

                </div>

            </div>
        </div>
    </div>


    <!-- content
        ================================================== -->
    <div id="content">

        <div class="services-box">
            <div class="container" style="max-width: 100%;">
                <div class="row">

                    <div class="col-md-4">
                        <div class="services-post">
                            
                            <a class="services-icon1" href="/login"><i class="fa fa-sign-in"></i></a>

                            <div class="services-post-content" >
                                <h4>عضو شو</h4>
                                <p> در کمتر از یک دقیقه صاحب تاکسی ذهنی خود شوید.شاید این تاکسی یک نقشه جادویی داشته باشد</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services-post">
                            <a class="services-icon1" href="/dashboard"><i class="fa fa-bolt"></i></a>
                            <div class="services-post-content" >
                                <h4>تاکسی ذهنی خود را کامل کنید</h4>
                                <p>
                                    تاکسی ذهنی خود را وارد ایستگاه کنید.با این کار است که شما در اعلام حضور می‌کنید
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services-post">
                            <a class="services-icon3" href="/"><i class="fa fa-tachometer"></i></a>
                            <div class="services-post-content">
                                <h4>سبقت از دیگران</h4>
                                <p>برای شتاب گرفتن نیاز است سبک بال باشید پس  هرچه می‌توانی ببخش و به دیگران کمک کن</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- recent-works-box -->
        <div class="recent-works">
            <div class="container">
                <h3>آخرین درخواست ها</h3>


                <div class="row">

                    @foreach($posts as $p)
                        <div class="col-md-4">
                            <div  class="card" style="min-height:200px;" >
                            <span>
                                <div class="col-md-5" style="text-align: center">
                                    <img src="../{{$p->image}}" alt="" width="130" height="130" style="border-radius: 10px; margin-top:12%;">
                                    <a class="btn btn-success"  style=" display:block; position:relative; top: 10px;" href="/posts/{{$p->id}}" role="button">مشاهده</a>  

                                </div>
                                <div class="col-md-7 card-body">
                                    
                                        <a href="/posts/{{$p->id}}">
                                        <h4 class="card-title" style="text-align:center">{!!str_limit(strip_tags($p->title),45)!!}</h4>
                                        </a>
                                        <h>{{$p->category->name}}</h>
                                        <h style="float:left">{{$p->user->name}}</h>
                                        <h3 style="margin-top: 1rem; font-size: 15px">
                                        {!!str_limit(strip_tags($p->body),80)!!}
                                        </h3>
                                        
                                        
                                        
                                        
                                </div>
                                
                            </span>
                            </div>
                        </div>

                    @endforeach





                </div>






                
            </div>
        </div>



        <!-- Latest Post -->
        <div class="latest-post">
            <div class="title-section">
                <h1 style="margin-right: 30px; text-align: center">آخرین اخبار</h1>
                <br>
                <h4 style="margin-right: 30px; text-align: center">با سورسیز باش و هم مسیرتو پیدا کن</h4>
            </div>

            <div id="owl-demo" style="text-align: center; padding-left:20px; padding-right:20px "  class="owl-carousel owl-theme" >
                @foreach($blogs as $blog)
                <div class="item news-item">
                    <div class="inner-item">
                        <img alt="" src="{{$blog->image}}">
                        {{--<div class="hover-item">--}}
                            {{--<ul>--}}
                                {{--<li><a class="autor" href="#">{{$blog->title}}</a></li>--}}
                              {{--</ul>--}}
                        {{--</div>--}}
                    </div>

                    <p><a href="blog/{{$blog->id}}">{{$blog->title}}</a></p>
                    <p>{!!str_limit($blog->body,45)!!}<a href="blog/{{$blog->id}}">ادامه مطلب</a></p>

                </div>
                    @endforeach








            </div>
        </div>

      
            </div>
        </div>

    </div>
    <!-- End content -->



    <!-- End footer -->
</div>
<!-- End Container -->

<!--
##############################
 - ACTIVATE THE BANNER HERE -
##############################
-->
<script type="text/javascript">

    var tpj=jQuery;
    tpj.noConflict();

    tpj(document).ready(function() {

        if (tpj.fn.cssOriginal!=undefined)
            tpj.fn.css = tpj.fn.cssOriginal;

        var api = tpj('.fullwidthbanner').revolution(
            {
                delay:8000,
                startwidth:1170,
                startheight:580,

                onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

                thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                thumbHeight:50,
                thumbAmount:3,

                hideThumbs:0,
                navigationType:"bullet",				// bullet, thumb, none
                navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

                navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


                navigationHAlign:"center",				// Vertical Align top,center,bottom
                navigationVAlign:"bottom",					// Horizontal Align left,center,right
                navigationHOffset:30,
                navigationVOffset: 40,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                touchenabled:"on",						// Enable Swipe Function : on/off


                stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
                hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


                fullWidth:"on",

                shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

            });


        // TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
        // YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
        api.bind("revolution.slide.onloaded",function (e) {


            jQuery('.tparrows').each(function() {
                var arrows=jQuery(this);

                var timer = setInterval(function() {

                    if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
                        arrows.fadeOut(300);
                },3000);
            })

            jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
                jQuery('.tp-simpleresponsive').addClass("mouseisover");
                jQuery('body').find('.tparrows').each(function() {
                    jQuery(this).fadeIn(300);
                });
            }, function() {
                if (!jQuery(this).hasClass("tparrows"))
                    jQuery('.tp-simpleresponsive').removeClass("mouseisover");
            })
        });
        // END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
    });
</script>
<script>
    jQuery(function(){
        DevSolutionSkill.init('circle');
        DevSolutionSkill.init('circle2');
        DevSolutionSkill.init('circle3');
        DevSolutionSkill.init('circle4');
        DevSolutionSkill.init('circle5');
        DevSolutionSkill.init('circle6');
    });
</script>



@endsection