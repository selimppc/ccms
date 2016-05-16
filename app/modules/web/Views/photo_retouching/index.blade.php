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
        {{--<img src="etsb/web_assets/images/item-08-01.png" alt="color-seperation-correction">--}}
        @foreach($data as $image_data)
            <img src="{{$image_data->featured_image}}" alt="{{$image_data->featured_image}}">
        @endforeach
    </div>

    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">Photo Retouching</h2>
                        <p class="service-main-content">
                            Quality photographs are ardent ingredient of media and fashion industry, and they have become an identifying representation of most brands. Image Retouching has become the right option for clarifying such photographs. And in the advanced state, image retouching has become the need for the day. Our world class team of Designers put a painstaking effort with utter creativity to accomplish in your image retouching and photo touch up with every detail.</p>
                    </div>
                    <div class="span2 thumb">
                        <img class="man-cut right" src="etsb/web_assets/images/retouching.png" alt="retouching">
                    </div>
                    <div class="clear"></div>
                    <div class="span12">
                        <div class="trial-button-area">
                            <a href="#" class="trial-button">Free Trial</a>
                        </div>
                    </div>
                </div>
                <div class="service-feature-area">
                    <div class="item-box price span10 offset1">
                        <div class="img left">price</div>
                        <div class="content left">
                            <p class="content-title">Best Price</p>
                            <p class="service-main-content">Where quality means everything to you price comes as next consideration. bZm Graphics offer both Perfect quality finish and Best competitive price. As we are focused in long term business relationship, we are always open to discuss price.</p>
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
                            <div class="img masking">
                                <img src="etsb/web_assets/images/masking.png" alt="service-galance-masking">
                            </div>
                            <p class="content-title">Image Masking</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item-box span3">
                            <div class="img shadow-creation">
                                <img src="etsb/web_assets/images/shadow-creation.png" alt="service-galance-shadow-creation">
                            </div>
                            <p class="content-title">Shadow &amp; Reflection Creation</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop