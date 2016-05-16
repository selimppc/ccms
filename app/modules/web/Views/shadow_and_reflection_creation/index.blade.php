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
        {{--<img src="etsb/web_assets/images/item-11-01.png" alt="color-seperation-correction">--}}
        @foreach($data as $image_data)
            <img src="{{$image_data->featured_image}}" alt="{{$image_data->featured_image}}">
        @endforeach
    </div>

    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">Shadow and Reflection Creation</h2>
                        <p class="service-main-content"> Image shadowing is undoubtedly one of the most beneficial techniques to enhance the beauty of a Photo. Adding reflection and drop shadows can transform dull illustrations giving them a crisp and attractive appeal. Our expert designers are at best of accomplishing Image shadowing service (natural shadow, drop shadow, reflection shadow) using their breathtaking formula. </p>
                    </div>
                    <div class="span2 thumb"> <img class="man-cut right" src="etsb/web_assets/images/man-cutting.png" alt="man-cutting"> </div>
                    <div class="clear"></div>
                    <div class="span12">
                        <div class="trial-button-area"> <a href="#" class="trial-button">Free Trial </a> </div>
                    </div>
                </div>

                <div class="service-feature-area">
                    <div class="item-box fast span10 offset1">
                        <div class="img left">fast</div>
                        <div class="content left">
                            <p class="content-title">Super Fast Delivery</p>
                            <p class="service-main-content">bZm Graphics guarantee you a faster turnaround time. This is just not a commitment but a bible we rely on. We have different teams projects based. That allows us to deliver your requirements within your expected time frame.</p>
                        </div>
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
                            <p class="content-title">Photoshop Retouch</p>
                        </div>
                    </a> <a href="#">
                        <div class="item-box span3">
                            <div class="img masking"><img src="etsb/web_assets/images/masking.png" alt="service-galance-masking"></div>
                            <p class="content-title">Image Masking</p>
                        </div>
                    </a> <a href="#">
                        <div class="item-box span3">
                            <div class="img shadow-creation"><img src="etsb/web_assets/images/shadow-creation.png" alt="service-galance-shadow-creation"></div>
                            <p class="content-title">Shadow and refection Creation</p>
                        </div>
                    </a> </div>
            </div>
        </div>
    </div>
    </div>

@stop