{{--<!DOCTYPE html>--}}
{{--<html lang="fa">--}}

{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Styles bootstrap-->--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}

    {{-- font-awesome --}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">--}}
    {{--{!! SEOMeta::generate() !!}--}}
    {{--{!! Twitter::generate() !!}--}}
    {{--{!! SEO::generate('true') !!}--}}

    {{--<!-- Global site tag (gtag.js) - Google Analytics -->--}}
    {{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140386684-1"></script>--}}
    {{--<script>--}}
        {{--window.dataLayer = window.dataLayer || [];--}}
        {{--function gtag(){dataLayer.push(arguments);}--}}
        {{--gtag('js', new Date());--}}

        {{--gtag('config', 'UA-140386684-1');--}}
    {{--</script>--}}


{{--</head>--}}


<html lang="en" class="no-js">
<head>
    <title>قالب شرکتی کانورت</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" type="text/css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fullwidth.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}">
    <link href="https://cdn.rawgit.com/rastikerdar/vazir-font/v[X.Y.Z]/dist/font-face.css" rel="stylesheet" type="text/css" />







     {!! Twitter::generate() !!}
    {!! SEO::generate('true') !!}


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/raphael-min.js"></script>
    <script type="text/javascript" src="js/DevSolutionSkill.min.js"></script>
    <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/plugins-scroll.js"></script>

    <script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/plugins-scroll.js"></script>
    <script type="text/javascript" src="js/script.js"></script>


    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    {{--<script type="text/javascript" src="js/script.js"></script>--}}

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>












<body >
    {{-- <div id="app" class="mian-class"> --}}
        @include('inc.navbar')
        <div class="wrapper">
            @include('inc.messages')
            @yield('content')
            @include('inc.footer')
        </div>
        {{-- <div class="push"></div> --}}
        
    {{-- </div> --}}
    
    {{-- @include('inc.footer') --}}
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.config.contentsLangDirection = 'rtl';
        CKEDITOR.replace( 'article-ckeditor');
        
        
    </script>


    {{--<script type="text/javascript" src="js/jquery.min.js"></script>--}}
    {{--<script type="text/javascript" src="js/jquery.migrate.js"></script>--}}
    {{--<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>--}}
    {{--<script type="text/javascript" src="js/bootstrap.js"></script>--}}
    {{--<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>--}}
    {{--<script type="text/javascript" src="js/jquery.isotope.min.js"></script>--}}
    {{--<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>--}}
    {{--<script type="text/javascript" src="js/plugins-scroll.js"></script>--}}
    {{--<script type="text/javascript" src="js/script.js"></script>--}}
</body>
</html>
