
<footer>
    <div class="up-footer">
        <div class="container">
            <div class="row">


                <div class="col-md-3 footer-col-r " style="margin-bottom: 20px" >
                    <a><img src="../image/surlog.png"></a>
                    <div class="card-img-overlay " style="padding-bottom: 20px">
                        <br>
                        <h4 style="text-align: center">همفکر و هم مسیرتو پیدا کن</h4>
                        <br>
                        <h4 style="text-align: center">مسیر موفقیت رو کوتاه کن</h4>

                        <h4 style="padding:20px 20px 20px 20px">
                            <ul class="social-icons">

                                <li><a class="facebook" href="https://www.facebook.com/sursizteam"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/sursizteam"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="rss" href="https://www.linkedin.com/in/sursizteam"><i class="fa fa-linkedin"></i></a></li>
                                {{--<li><a class="google" href="#"><i class="fa fa-youtube"></i></a></li>--}}
                                <li><a class="linkedin" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-telegram"></i></a></li>

                            </ul>
                        </h4>
                        <h4 style="text-align: center">MAKE YOUR WAY FASTER</h4>

                    </div>

                </div>




                <div class="col-md-3">

                    <h4 style="text-align: center">اطلاعات تماس</h4>
                    <br>
                    <ul class="contact-list" style="padding-right: 40px">
                        <li> 03155579059 <i class="fa fa-phone"></i> </li>
                        <li> info@sursiz.ir <i class="fa fa-envelope"></i></li>
                        <li>کاشان-بلوارمادر-مرکزرشددانشگاه کاشان <i class="fa fa-home"></i> </li>
                    </ul>


                </div>



                <div class="col-md-3">

                    <div class="widget work-widget" style="padding-right: 20px">
                        <h4 style="font-size:large;text-align: center">ساعت کاری</h4>
                        <br>
                        <p style="padding-right: 20px">شنبه تا چهارشنبه : ١٠  تا ١٨ </p>
                        <p style="padding-right: 20px">پنجشنبه : ١٠  تا ١٤ </p>
                    </div>
                    <div class="widget tag-widget">
                        <br>
                        <h4 style="font-size:large;text-align: center">برچسب ها</h4>
                        <br>
                        <ul class="tag-widget-list">
                            <li><a href="https://sursiz.ir">سورسیز</a></li>
                            <li><a href="https://mbalncer.com">سورنا</a></li>
                            <li><a href="https://mbalancer.com">mbalancer</a></li>
                            <li><a href="https://mbalancer.com">درخواست</a></li>
                            <li><a href="https://sursiz.ir/login">تاکسی ذهنی</a></li>
                            <li><a href="https://sursiz.ir/posts">ایده</a></li>
                        </ul>
                    </div>


                </div>




                <div class="col-md-3" >
                    <div class="widget  message-widget" style="margin-bottom: 20px">
                        <h4 style="text-align: center">مشترک شوید</h4>
                        <br>
                        <h5 style="text-align: center">تاکسی ذهنی خود را سریع تر پر کنید!شاید ایستگاه بعدی،ایستگاه موفقیت شما باشد! با ما همراه باشید</h5>
                    </div>
                    <form action="{{route('footer.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-row row">

                            <div class="col dk-footer-form" >
                                <span style="padding-right: 0px; height: 40px">
                                    <button type="submit" style="background-color: #3097D1;color: white; height: 35px;" >
                                        <i style="text-align: right; " class="fa fa-send-o" >ثبت</i>
                                    </button>
                                </span>
                                <input  style="padding-right:20px " type="text" class="form-footer" name="email" id="email" placeholder="ایمیل را وارد کنید">
                            </div>



                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-line">
        <div class="container">
            <div style="text-align: center;  font-family:"Helvetica Neue", Helvetica, Arial, sans-serif  " > Copyright © 2019, All Right surena-project</div>
            <br>
            <div style="text-align: center">سایت به شدت در حال توسعه است</div>

        </div>
    </div>

</footer>