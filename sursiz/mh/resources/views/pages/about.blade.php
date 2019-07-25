@extends('layouts.app')

@section('content')




    {{--<h1 style="text-align: center; padding-top: 30px;">درباره‌ما</h1>--}}
    {{----}}


    {{--<div>--}}
        {{--<div class="container ">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="section-title-divider"></div>--}}
                    {{--<p class="section-description" style="text-align: center; font-weight: bold" >اولین تاکسی ذهنی در ایران</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container" style="height: 300px">--}}
            {{--<div class="row">--}}

                {{--<div class="col-md-6 about-content">--}}
                    {{--<h2 class="about-title">sursiz جایی برای شتاب دادن به ذهن </h2>--}}
                    {{--<p class="about-text">--}}
                        {{--در ایستگاه sursiz معتقدیم افراد زیادی در دنیای پیرامون ما، اهداف مشترکی با دیدگاه های متفاوتی دارند.--}}
                    {{--<p class="about-text">--}}
                        {{--اگر می خواهید در زندگی خود موفق شوید بهتر است با گرفتن یک تاکسی  ذهنی sursiz در این راه طولانی ،از تجربیات سایر مسافران این مسیر بهره ببرید.--}}
                    {{--</p>--}}
                    {{--<p class="about-text">--}}
                        {{--sursiz  از دوکلمه ی  sur و siz تشکیل شده است--}}
                        {{--sur  به معنی اسب و  siz به معنای تندرو می باشد.--}}
                    {{--</p>--}}
                {{--</div>--}}

                {{--<div class="col-md-6" style="margin-bottom: 20px" >--}}
                    {{--<img style="width: 100%; height: 50%;border-radius: 10px;" src="{{url('/image/mind.jpg')}}" alt="">--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div id="team" style="margin-top: 300px">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<h3 class="section-title" style="text-align: center">تیم‌ما</h3>--}}
                    {{--<div class="section-title-divider"></div>--}}
                    {{--<p class="section-description" style="text-align: center">یک تیم فعال پشت شماست با ما در ارتباط باشید</p>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="member">--}}
                        {{--<div class="pic" style="text-align: center"><img src="storage/cover_images/67761_1556795721.jpg" alt=""></div>--}}
                        {{--<h4 style="text-align: center"> سیدبدرالدین بهشتی صدر</h4>--}}
                        {{--<span>برنامه نویس و توسعه دهنده ی وب سایت</span>--}}
                        {{--<div class="social" style="text-align: center">--}}
                            {{--<a href=""><i class="fa fa-twitter"></i></a>--}}
                            {{--<a href=""><i class="fa fa-facebook"></i></a>--}}
                            {{--<a href=""><i class="fa fa-google-plus"></i></a>--}}
                            {{--<a href=""><i class="fa fa-linkedin"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


                    {{--<div class="col-md-4">--}}
                        {{--<div class="member">--}}
                            {{--<div class="pic" style="text-align: center"><img src="storage/cover_images/67761_1556795721.jpg" alt=""></div>--}}
                            {{--<h4 style="text-align: center">محمدحسین شریفی</h4>--}}
                            {{--<span>برنامه نویس و توسعه دهنده ی وب سایت</span>--}}
                            {{--<div class="social" style="text-align: center">--}}
                                {{--<a href=""><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href=""><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href=""><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href=""><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--<div class="col-md-4">--}}
                    {{--<div class="member">--}}
                        {{--<div class="pic" style="text-align: center"><img src="storage/cover_images/67761_1556795721.jpg" alt=""></div>--}}
                        {{--<h4 style="text-align: center">اسماعیل بخشی</h4>--}}
                        {{--<span>گرافیست و تولیدکننده محتوای شبکه های اجتماعی</span>--}}
                        {{--<div class="social" style="text-align: center">--}}
                            {{--<a href=""><i class="fa fa-twitter"></i></a>--}}
                            {{--<a href=""><i class="fa fa-facebook"></i></a>--}}
                            {{--<a href=""><i class="fa fa-google-plus"></i></a>--}}
                            {{--<a href=""><i class="fa fa-linkedin"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



    <div id="content" style="margin-top: 150px;">

        <!-- Page Banner -->
        <div class="page-banner">
            <div class="container">
                <h2>درباره ما</h2>
                <ul class="page-tree">
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="index.html">صفحه نخست</a></li>

                </ul>
            </div>
        </div>

        <div class="about-box">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="company-mission">
                            <h3>ماموریت شرکت</h3>
                            <span class="icon"></span>
                            <p><span>اولین تاکسی ذهنی در ایران</span>
                                <br>
                                <h>
                                    sursiz جایی برای شتاب دادن به ذهن
                                </h>
                                <br>
                                در ایستگاه sursiz معتقدیم افراد زیادی در دنیای پیرامون ما، اهداف مشترکی با دیدگاه های متفاوتی دارند.

                                اگر می خواهید در زندگی خود موفق شوید بهتر است با گرفتن یک تاکسی ذهنی sursiz در این راه طولانی ،از تجربیات سایر مسافران این مسیر بهره ببرید.

                                sursiz از دوکلمه ی sur و siz تشکیل شده است sur به معنی اسب و siz به معنای تندرو می باشد.


                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="skills-progress">
                            <div>
                            <h>مهارت های ما</h>
                            </div>
                            <p>طراحی سایت<span>100%</span></p>
                            <div class="meter nostrips photoshop">
                                <span style="width: 100%"></span>
                            </div>
                            <p>طراحی گرافیک<span>85%</span></p>
                            <div class="meter nostrips photoshop">
                                <span style="width: 85%"></span>
                            </div>
                            <p>کد نویسی و سئو<span>76%</span></p>
                            <div class="meter nostrips html">
                                <span style="width: 76%"></span>
                            </div>
                            <p>بازریابی<span>53%</span></p>
                            <div class="meter nostrips ruby">
                                <span style="width: 53%"></span>
                            </div>
                            <p>برنامه نویسی<span>80%</span></p>
                            <div class="meter nostrips marketing">
                                <span style="width: 80%"></span>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="about-us-text">
                            <h3>تاریخچه </h3>
                            <div class="inner-box">
                                <img alt="" src="upload/about.jpg">
                                {{--<p><span>لورم ایپسوم یا طرح‌نما </span>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>--}}
                                <p>
                                    <span>سورنا</span>
                                    <br>
                                    یه تیم تازه تاسیس با جوان های مستعد که هر روزه به دنبال گسترش حیطه ی کاری می باشد

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- staff-box -->
        <div class="staff-box vers2">
            <div class="container">
                <h3>تیم ما</h3>
                <div class="row">

                    <div class="col-md-3">
                        <div class="staff-post">
                            <div class="staff-post-content">
                                <h5> اسماعیل بخشی</h5>
                                <span>گرافیست و تولیدکننده محتوای شبکه های اجتماعی</span>
                            </div>
                            <div class="staff-post-gal">
                                <ul class="staf-social">
                                    <li><a class="pinterest" style="text-align: center" href="https://t.me/EsmaeilBakhshi98"><i class="fa fa-telegram"></i></a></li>
                                    <li><a class="instagram" style="text-align: center" href="https://www.instagram.com/esmaeil_bakhshii"><i class="fa fa-instagram"></i></a></li>

                                </ul>
                                <img alt="" src="image/esi.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="staff-post">
                            <div class="staff-post-content">
                                <h5>سید بدرالدین بهشتی صدر</h5>
                                <span>برنامه نویس و توسعه دهنده ی وب سایت</span>
                            </div>
                            <div class="staff-post-gal">
                                <ul class="staf-social">
                                    <li><a class="pinterest" style="text-align: center" href="https://t.me/Badrex"><i class="fa fa-telegram"></i></a></li>
                                    <li><a class="instagram" style="text-align: center" href="https://www.instagram.com/badrex123"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <img alt="" src="image/badrex.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="staff-post">
                            <div class="staff-post-content">
                                <h5> محمد حسین شریفی</h5>
                                <span>برنامه نویس و توسعه دهنده ی وب سایت</span>
                            </div>
                            <div class="staff-post-gal">
                                <ul class="staf-social">
                                    <li><a class="pinterest" style="text-align: center" href="https://t.me/mhs969"><i class="fa fa-telegram"></i></a></li>
                                    <li><a class="instagram" style="text-align: center" href="https://www.instagram.com/mh.sh76"><i class="fa fa-instagram"></i></a></li>

                                </ul>
                                <img alt="" src="image/mamad.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="staff-post">
                            <div class="staff-post-content">
                                <h5> سید حسین رضوی</h5>
                                <span>برنامه نویس و توسعه دهنده ی اپلیکیشن </span>
                            </div>
                            <div class="staff-post-gal">
                                <ul class="staf-social">

                                    <li><a class="pinterest" style="text-align: center" href="https://t.me/Shrazavi110"><i class="fa fa-telegram"></i></a></li>
                                    <li><a class="instagram" style="text-align: center" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <img alt="" src="image/seyed.jpg">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">

                    </div>

                    <div class="col-md-3">
                        <div class="staff-post">
                            <div class="staff-post-content">
                                <h5>محمد جواد نعمتی</h5>
                                <span>برنامه نویس و توسعه دهنده ی وب سایت</span>
                            </div>
                            <div class="staff-post-gal">
                                <ul class="staf-social">
                                    <li><a class="pinterest" style="text-align: center" href="https://t.me/Badrex"><i class="fa fa-telegram"></i></a></li>
                                    <li><a class="instagram" style="text-align: center" href="https://www.instagram.com/badrex123"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <img alt="" src="image/badrex.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="staff-post">
                            <div class="staff-post-content">
                                <h5>محمد مهدی سرمدی</h5>
                                <span>برنامه نویس و توسعه دهنده ی اپلیکیشن </span>
                            </div>
                            <div class="staff-post-gal">
                                <ul class="staf-social">
                                    <li><a class="pinterest" style="text-align: center" href="https://t.me/mhs969"><i class="fa fa-telegram"></i></a></li>
                                    <li><a class="instagram" style="text-align: center" href="https://www.instagram.com/mh.sh76"><i class="fa fa-instagram"></i></a></li>

                                </ul>
                                <img alt="" src="image/mamad.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">

                    </div>

                </div>
            </div>
        </div>





    </div>



@endsection