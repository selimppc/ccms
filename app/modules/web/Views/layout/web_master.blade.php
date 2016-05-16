<!DOCTYPE html>
<!-- saved from url=www/html/miracle/miracle_template.html -->
<html class=" js canvas canvastext no-touch cssanimations csstransforms csstransforms3d csstransitions">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Page Title -->
    <title> {{$title?$title:''}} </title>
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="title" content="{{ isset($data['meta_title'])?$data['meta_title']:'' }}">
    <meta name="keyword" content="{{ isset($data['meta_keyword'])?$data['meta_keyword']:'' }}">
    <meta name="description" content="{{ isset($data['meta_desc'])?$data['meta_desc']:'' }}">
    <meta name="author" content="BZM Graphics">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Theme Styles -->
    <link href="{{ URL::asset('etsb/web_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/css/css3') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/slider_assets/css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/slider_assets/layerslider/css/layerslider.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/web_assets/slider_assets/css/slider_style.css') }}" rel="stylesheet" type="text/css" >

    <script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/jquery-1.9.1.min.js') }}"></script>

    <script>
        $("ul li:empty").remove();
    </script>
</head>
<body>
<div id="page-wrapper">

    <header id="header" class="header-color-white header-sticky">
        @include('web::layout.web_header')
    </header>
    <div style="position: relative; width: 100%; height: auto; margin-top: 0px; margin-bottom: 0px; max-height: 1268px;" class="forcefullwidth_wrapper_tp_banner">
        <!--Slider Start-->

        <!--
		<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 700px; overflow: hidden; visibility: hidden;">
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 700px; overflow: hidden;">
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="images/bg1.jpg" />
                </div>
            </div>
        </div>
		-->

        <!--Slider Start-->

        @if(isset($home_value) && $home_value == "home")
            <div class="slider-area">
                @include('web::layout.web_slider')
            </div>
        @endif
        <!--Slider End-->
    </div>

    <section id="content">
        @yield('content')
    </section>

    <footer id="footer" class="style4">

        @include('web::layout.web_footer')
    </footer>
</div>

<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/jquery-2.1.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/jquery.noconflict.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/modernizr.2.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/jquery-ui.1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/jquery.plugins.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/js/service_custom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/slider_assets/layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/slider_assets/js/bootstrap.file-input.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/slider_assets/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/slider_assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('etsb/web_assets/slider_assets/js/jquery.min.js') }}"></script>

</body>
</html>

