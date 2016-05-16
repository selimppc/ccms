@extends('web::layout.web_master')

@section('content')

    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                @foreach($data as $image_data)
                    <h1 class="entry-title">{{$image_data->title?$image_data->title:''}} </h1>
                @endforeach
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="http://www.soaptheme.net/html/miracle/index.html">Home</a></li>
            <li><a href="#">PAGES</a></li>
            <li class="active">Portfolio</li>
        </ul>
    </div>

    <div class="slider-area">
        {{--<img src="etsb/web_assets/images/item-10-01.png" alt="color-seperation-correction">--}}
        @foreach($data as $image_data)
            <img src="{{$image_data->featured_image}}" alt="{{$image_data->featured_image}}">
        @endforeach
    </div>

    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">E-commerce Image optimization</h2>
                        <p class="service-main-content"> Image optimization is a key for fast web page display. Optimizing photo for the web is vital if you are running an e-commerce site or online store as an e-commerce site make up over 50 percent of average web page and determines the display speed of your pages.<br>
                            Let graphics optimization experts at bZm Graphics optimize your graphics for maximum speed. At bZm Graphics we compress any sizes of images, reduce the image file size and optimize the images for the end user without any loss of quality or any kind of slight deviation of the image appearance.</p>
                    </div>
                    <div class="span2 thumb"> <img class="man-cut right" src="etsb/web_assets/images/web-image-optimazation.png" alt="man-cut-web-image-optimazation"> </div>
                    <div class="clear"></div>
                    <div class="span12">
                        <div class="trial-button-area"> <a href="#" class="trial-button">Free Trial</a> </div>
                    </div>
                </div>

                <div class="we-are service-head-area"><span class="left-shadow"></span>
                    <h3 class="we-are-head">Easy Way</h3>
                    <span class="right-shadow"></span></div>
                <div class="easy-way-area">
                    <div class="item-box span4"><img src="etsb/web_assets/images/easy-01.png">
                        <p class="content-title">Create Job</p>
                    </div>
                    <div class="item-box span4"><img src="etsb/web_assets/images/easy-02.png">
                        <p class="content-title">We Process</p>
                    </div>
                    <div class="item-box span4"><img src="etsb/web_assets/images/easy-03.png">
                        <p class="content-title">You Happy</p>
                    </div>
                </div>
                <div class="we-are service-galance-area"> <span class="left-shadow"></span>
                    <h3 class="we-are-head">Services At A Glance</h3>
                    <span class="right-shadow"></span> </div>
                <div class="service-galance"> <a href="#">
                        <div class="item-box span3">
                            <div class="img clipping"><img alt="service-galance-clipping" src="etsb/web_assets/images/clipping.png"></div>
                            <p class="content-title">Photoshop Clipping Path</p>
                        </div>
                    </a> <a href="#">
                        <div class="item-box span3">
                            <div class="img retouching"><img alt="service-galance-retouching" src="etsb/web_assets/images/retouching.png"></div>
                            <p class="content-title">Photo Retouch</p>
                        </div>
                    </a> <a href="#">
                        <div class="item-box span3">
                            <div class="img masking"><img src="etsb/web_assets/images/masking.png" alt="service-galance-masking"></div>
                            <p class="content-title">Image Masking</p>
                        </div>
                    </a> <a href="#">
                        <div class="item-box span3">
                            <div class="img shadow-creation"><img src="etsb/web_assets/images/shadow-creation.png" alt="service-galance-shadow-creation"></div>
                            <p class="content-title">Shadow and Reflection Creation</p>
                        </div>
                    </a> </div>
            </div>
        </div>
    </div>

@stop