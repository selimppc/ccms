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
            <li><a href="#">Home</a></li>
            <li><a href="#">PAGES</a></li>
            <li class="active">About Us</li>
        </ul>
    </div>
    <div class="main-body">    <div class=" slider-area">
            @foreach($data as $image_data)
                <img src="{{$image_data->featured_image}}" alt="{{$image_data->featured_image}}">
            @endforeach
            {{--<img src="etsb/web_assets/images/item-05-02.png" alt="man-cut-clipping">--}}
        </div>

        <div class="service-item single">

            <div class="container">

                <div class="row">

                    <div class="content-area">

                        <div class="span9 offset1">

                            <p class="content-title">Photoshop Clipping Mask</p>

                            <p class="service-main-content">

                                Manipulating an image with complex angles requires significant attention to detail and skill.

                                With a team of many years experienced in the digital design industry bZm Graphics is we capable to provide both type of Photo Masking services Layer Masking and Channel Masking. At the same time we are also capable to assure the 100% quality, quick turnaround time and competitive price. </p>

                        </div>

                        <div class="span2 thumb">

                            <img class="man-cut right" src="etsb/web_assets/images/masking.png" alt="masking">

                        </div>

                        <div class="clear"></div>

                        <div class="span12">

                            <div class="trial-button-area">

                                <a href="file:///home/etsb/Desktop/bzm_graphics/free-trial.html" class="trial-button">Free Trial</a>

                            </div>

                        </div>

                    </div>

                    <div class="we-are service-head-area"><span class="left-shadow"></span><h3 class="we-are-head"><b>Easy Way</b></h3>
                        <span class="right-shadow"></span></div>
                    <div class="easy-way-area"><div class="item-box span4"><img src="etsb/web_assets/images/easy-01.png"><p class="content-title">Create Job</p></div><div class="item-box span4"><img src="etsb/web_assets/images/easy-02.png"><p class="content-title">We Process</p></div><div class="item-box span4"><img src="etsb/web_assets/images/easy-03.png"><p class="content-title">You Happy</p></div></div> <div class="we-are service-galance-area">


                        <span class="left-shadow"></span><h3 class="we-are-head">Service At a Galance</h3><span class="right-shadow"></span>


                    </div>

                    <div class="service-galance">

                        <a href="file:///home/etsb/Desktop/bzm_graphics/clipping-path.html"><div class="item-box span3">

                                <div class="img clipping"><img alt="service-galance-clipping" src="etsb/web_assets/images/clipping.png"></div>

                                <p class="content-title">Photoshop Clipping Path</p>

                            </div></a>

                        <a href="file:///home/etsb/Desktop/bzm_graphics/photo-retouch.html"><div class="item-box span3">

                                <div class="img retouching"><img alt="service-galance-retouching" src="etsb/web_assets/images/retouching.png"></div>

                                <p class="content-title">Photo Retouch</p>

                            </div></a>

                        <a href="./bZm Graphics _ Image Masking _ Image Editing Services_files/bZm Graphics _ Image Masking _ Image Editing Services.html"><div class="item-box span3">

                                <div class="img masking"><img src="etsb/web_assets/images/masking.png" alt="service-galance-masking"></div>

                                <p class="content-title">Image Masking</p>

                            </div></a>

                        <a href="file:///home/etsb/Desktop/bzm_graphics/shadow-creation.html"><div class="item-box span3">

                                <div class="img shadow-creation"><img src="etsb/web_assets/images/shadow-creation.png" alt="service-galance-shadow-creation"></div>

                                <p class="content-title">Shadow &amp; Reflection Creation</p>

                            </div></a>

                    </div>

                </div>

            </div>

        </div>

    </div>

<style>
    .span4 {
        width: 300px;
        padding-left:175px;
    }
</style>

@stop