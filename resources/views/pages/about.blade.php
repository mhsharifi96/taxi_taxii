@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; padding-top: 30px;">درباره‌ما</h1>
    


    <div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-divider"></div>
                    <p class="section-description" style="text-align: center; font-weight: bold" >اولین تاکسی ذهنی در ایران</p>
                </div>
            </div>
        </div>
        <div class="container" style="height: 300px">
            <div class="row">

                <div class="col-md-6 about-content">
                    <h2 class="about-title">sursiz جایی برای شتاب دادن به ذهن </h2>
                    <p class="about-text">
                        در ایستگاه sursiz معتقدیم افراد زیادی در دنیای پیرامون ما، اهداف مشترکی با دیدگاه های متفاوتی دارند.
                    <p class="about-text">
                        اگر می خواهید در زندگی خود موفق شوید بهتر است با گرفتن یک تاکسی  ذهنی sursiz در این راه طولانی ،از تجربیات سایر مسافران این مسیر بهره ببرید.
                    </p>
                    <p class="about-text">
                        sursiz  از دوکلمه ی  sur و siz تشکیل شده است
                        sur  به معنی اسب و  siz به معنای تندرو می باشد.
                    </p>
                </div>

                <div class="col-md-6" style="margin-bottom: 20px" >
                    <img style="width: 100%; height: 50%;border-radius: 10px;" src="{{url('/image/mind.jpg')}}" alt="">
                </div>


            </div>
        </div>
    </div>
    <div id="team" style="margin-top: 300px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title" style="text-align: center">تیم‌ما</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description" style="text-align: center">یک تیم فعال پشت شماست با ما در ارتباط باشید</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="member">
                        <div class="pic" style="text-align: center"><img src="storage/cover_images/67761_1556795721.jpg" alt=""></div>
                        <h4 style="text-align: center"> سیدبدرالدین بهشتی صدر</h4>
                        <span>برنامه نویس و توسعه دهنده ی وب سایت</span>
                        <div class="social" style="text-align: center">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>


                    <div class="col-md-4">
                        <div class="member">
                            <div class="pic" style="text-align: center"><img src="storage/cover_images/67761_1556795721.jpg" alt=""></div>
                            <h4 style="text-align: center">محمدحسین شریفی</h4>
                            <span>برنامه نویس و توسعه دهنده ی وب سایت</span>
                            <div class="social" style="text-align: center">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>


                <div class="col-md-4">
                    <div class="member">
                        <div class="pic" style="text-align: center"><img src="storage/cover_images/67761_1556795721.jpg" alt=""></div>
                        <h4 style="text-align: center">اسماعیل بخشی</h4>
                        <span>گرافیست و تولیدکننده محتوای شبکه های اجتماعی</span>
                        <div class="social" style="text-align: center">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>




@endsection