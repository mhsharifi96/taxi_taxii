@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; padding-top: 30px;"><?php echo $title; ?></h1>


    <section id="about">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-title-divider"></div>
                    <p class="section-description" style="text-align: center; font-weight: bold" >اولین تاکسی ذهنی در ایران</p>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">

                <div class="col-md-6 about-content">
                    <h2 class="about-title">sursiz جایی برای شتاب دادن به ذهن </h2>
                    <p class="about-text">
                        در ایستگاه sursiz معتقدیم افراد زیادی در دنیای پیرامون ما، اهداف مشترکی با دیدگاه های متفاوتی دارند.
                    <p class="about-text">
                        اگر می خواهید در زندگی خود موفق شوید بهتر است با گرفتن یک تاکسی  ذهنی sursiz در این راه طولانی از تجربیات سایر مسافران این مسیر بهره ببرید.
                    </p>
                    <p class="about-text">
                        sursiz  از دوکلمه ی  sur و siz تشکیل شده است
                        sur  به معنی اسب و درلغت نامه به معنای اسب رانده شده و  siz به معنای تندرو می باشد.
                    </p>
                </div>

                <div class="col-lg-6" style="margin-bottom: 20px" >
                    <img style="width: 100%; height: 50%" src="storage/cover_images/67761_1556795721.jpg" alt="">
                </div>


            </div>
        </div>
    </section>




@endsection