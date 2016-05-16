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
        {{--<img src="etsb/web_assets/images/item-06-01.png" alt="color-seperation-correction">--}}
        @foreach($data as $image_data)
            <img src="{{$image_data->featured_image}}" alt="{{$image_data->featured_image}}">
        @endforeach
    </div>

    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">Neck Joint</h2>
                        <p class="service-main-content">
                            Photo manipulation is the process of altering a photo to improve the look, beauty and readability of the image. Photo manipulation creatively combines and modifies elements of a photo to produce a unique image that is convincing to a viewer. Image Manipulation is a key service of bZm Graphics. Our sophisticated image editing team is well capable to handle the manipulation service for any kind of complex images by matching the color, shapes, fitting and hue.</p>
                    </div>
                    <div class="span2 thumb">
                        <img class="man-cut right" src="etsb/web_assets/images/neck-join.png" alt="neck-join">
                    </div>
                    <div class="clear"></div>
                    <div class="span12">
                        <div class="trial-button-area">
                            <a href="#" class="trial-button">Free Trial</a>
                        </div>
                    </div>
                </div>
                <div class="service-feature-area">
                    <div class="item-box secured span10 offset1">
                        <div class="img left">secured</div>
                        <div class="content left">
                            <p class="content-title">Data Secured</p>
                            <p class="service-main-content">At bZm Graphics we treat it as our duty to make sure that your images are arranged and processed under maximum security and uncompromised privacy. We make sure only we both have the access to your images by providing you with fully encrypted web based application.</p>
                        </div>
                    </div>
                </div>
                <div class="we-are service-galance-area">
                    <span class="left-shadow"></span>
                    <h3 class="we-are-head">Services At A Glance</h3>
                    <span class="right-shadow"></span>
                </div>
                <div class="service-galance">
                    <a href="#"><div class="item-box span3">
                            <div class="img clipping">
                                <img alt="service-galance-clipping" src="etsb/web_assets/images/clipping.png">
                            </div>
                            <p class="content-title">Photoshop Clipping Path</p>
                        </div>
                    </a>
                    <a href="#"><div class="item-box span3">
                            <div class="img retouching">
                                <img alt="service-galance-retouching" src="etsb/web_assets/images/retouching.png">
                            </div>
                            <p class="content-title">Photo Retouch</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item-box span3">
                            <div class="img masking"><img src="etsb/web_assets/images/masking.png" alt="service-galance-masking">
                            </div>
                            <p class="content-title">Image Masking</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item-box span3">
                            <div class="img shadow-creation">
                                <img src="etsb/web_assets/images/shadow-creation.png" alt="service-galance-shadow-creation"></div>
                            <p class="content-title">Shadow &amp; Reflection Creation</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop