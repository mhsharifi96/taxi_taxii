{{-- 
<div>
      <footer class="footer-color" ">
            <div class="container footer-loc">
                <div class="row">
                        <div class="col-md-4">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت 
                        </div>
                <div class="col-md-4">ssss</div>
                
                <div class="col-md-4">
                        <ul class="nav-list">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
             </div>
            </div>
             
             <div class="footer-copyright text-center py-3" style="background-color:#1d1e21">© 2019 Copyright:
                    <a href="https://mdbootstrap.com/education/bootstrap/">linuxkhan.ir</a>
                  </div>
          </footer>
</div> --}}


<footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info" style="text-align: center">
                        <a href="index.html" class="footer-logo">
                            {{-- <img src="images/footer_logo.png" alt="footer_logo" class="img-fluid"> --}}
                            <img src="{{url('/image/logo.png')}}" alt="footer_logo" class="img-fluid">
                            {{-- <img src="{{url('/image/logo.png')}}" alt="" style="width:20%"> --}}
                        </a>
                        {{-- <p class="footer-info-text">
                           Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
                        </p> --}}
                        <p class="footer-info-text" style="text-align: center">
                            هم فکر و هم مسیرتو پیدا کن
                        </p>
                        <p class="footer-info-text" style="text-align: center">
                            مسیر موفقیت رو کوتاه کن

                        </p>
                        <div class="footer-social-link">
                            <h3 style="text-align: center">ما را دنبال کنید</h3>
                            <ul>
                                <li>
                                    <a href="http://www.facebook.com/taxi.taxii.11">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.twitter.com/taxitaxii1">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com/in/taxi-taxii">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                        {{-- <img src="images/icon/best.png" alt=""> --}}
                        <p>MAKE YOUR WAY FASTER</p>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us" >
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    
                                    <h3 >کاشان</h3>
                                    <p>بلوار مادر</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>03155579059</h3>
                                    <p>با ما تماس بگیرید</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>لینک‌های مفید</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="/about">درباره ما</a>
                                    </li>

                                    <li>
                                        <a href="/about">درباره تیم</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="/contact/create">تماس باما</a>
                                    </li>
                                    <li>
                                        <a href="#">بلاگ</a>
                                    </li>

                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>مشترک شوید</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p style="color:#ffff">
                             ایمیلتان را وارد کنید تا از درخواست ها مطلع شوید.
                                </p>
                            {{--{!! Form::open(['action' => 'FooterController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}--}}
                                {{--<div class="col-md-6 col-12">--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{Form::label('email', 'ایمیل')}}--}}

                                        {{--{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'ایمیل'])}}--}}
                                        {{--{{Form::submit('ارسال', ['class'=>'btn btn-primary'])}}--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--{!! Form::close() !!}--}}

                                <form action="{{route('footer.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-row">
                                        <div class="col dk-footer-form" style="padding-left: 0;">
                                            <input  type="text" class="form-control" name="email" id="email" placeholder="ایمیل را وارد کنید">

                                        </div>
                                        <button type="submit" style="background-color: #3097D1;color: white">
                                            <i class="fa fa-send"></i>
                                        </button>

                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-align: center">
                        <span>Copyright © 2019, All Right surena-project</span>
                        <br>
                        <span>سایت به شدت در حال توسعه است</span>
                    </div>
                    <!-- End Col -->

                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
</footer>
