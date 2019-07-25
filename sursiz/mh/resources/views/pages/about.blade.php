@extends('layouts.app')

@section('content')



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
                                <h6>
                                جمع سپاری کاها به سبک ارتباط ذهنی
                                </h6>
                                <br>
                                <a href="/">سورسیز</a> از دو کلمه سور+سیز تشکیل شده است که کلمه سور به معنی اسب سرخ و کلمه سیز به معنی تندرو است.
                            این کلمه برخلاف ظاهر کاملا فارسی است
                                <br><br>

                                سورسیز میخواهد با شما یاد بگیرد و<a href="/">کار تیمی</a> را گشترش بدهد.مطمئن باشید اگر بهترین ایده هم داشته باشید و آن را به عنوان یک راز نگه دارید دیر یا زود ایده شما با کیفیتی بالاتر پیاده سازی می‌شود.پس تا دیر نشده است تاکسی ذهنی خود را راه اندازی کنید.فرقی ندارد راننده باشید یا مسافر مهم آن است که در راه باشید
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
                            <p><a href="https://mbalancer.com">
                                مشاوره کسب و کار‌های کوچک
                            </a>
                                <span>80%</span></p>
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
                                    یه تیم تازه تاسیس با جوان های مستعد که هر روزه به دنبال گسترش حیطه ی کاری خود میباشد. شما هم میتوانید به ما بپیوندید و با یکدیگر یک تاکسی ذهنی جهانی بسازیم
                                    
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
                                <span>گرافیست و تولیدکننده محتوا</span>
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