@extends('web::layout.web_master')

@section('content')
    <style>
        .circle-progress .circle-text {
            top: 115px;
        }
    </style>

    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">{{$data->title}}</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            @if($data->type=='about-us' || $data->type=='how-it-works' || $data->type=='home')
                    <!-- nothing to do -->
            @else
                <li><a href="#">Services</a></li>
            @endif
            <li class="active">{{$data->title}}</li>
        </ul>
    </div>

   @if($data)
        @if($data->type=='about-us' || $data->type=='how-it-works'|| $data->type=='home')
            <!-- nothing to do -->
        @else
            <div class="mouse-moving-slider-area">
            {{--<img src="{{$data->featured_image}}" alt="{{$data->title}}">--}}
            <ul class="mouse-moving-sliding">
                <li class="item-1">
                    <div class="mouse-moving-default" style='background: url("{{$data->featured_image_2}}") no-repeat;'></div>
                    <div class="mouse_moving_another_area"></div>
                    <div class="mouse-moving-moving" style='background: url("{{$data->featured_image}}") no-repeat;'></div>
                </li>
            </ul>
            </div>
        @endif

       <?php echo $data->desc; ?>
  @endif

  {{--Services--}}
  @if($data)
       @if(!($data->type=='about-us'||$data->type=='how-it-works'||$data->type=='home'))
            <div class="we-are service-galance-area"> <span class="left-shadow"></span>
                <h3 class="we-are-head">Services At A Glance</h3>
                <span class="right-shadow"></span>
            </div>

            <div class="service-galance">
                <a href="photoshop-clipping-path">
                    <div class="item-box span3">
                        <div class="img clipping"><img alt="service-galance-clipping" src="etsb/web_assets/images/clipping.png">
                        </div>
                        <p class="content-title"> Photoshop Clipping Path </p>
                    </div>
                </a>
                <a href="photo-retouching">
                    <div class="item-box span3">
                        <div class="img retouching"><img alt="service-galance-retouching" src="etsb/web_assets/images/retouching.png"></div>
                        <p class="content-title">Photo Retouching</p>
                    </div>
                </a>
                <a href="image-masking">
                    <div class="item-box span3">
                        <div class="img masking"><img src="etsb/web_assets/images/masking.png" alt="service-galance-masking"></div>
                        <p class="content-title">Image Masking</p>
                    </div>
                </a>
                <a href="shadow-and-reflection-creation">
                    <div class="item-box span3">
                        <div class="img shadow-creation"><img src="etsb/web_assets/images/shadow-creation.png" alt="service-galance-shadow-creation"></div>
                        <p class="content-title">Shadow & Reflection Creation</p>
                    </div>
                </a>
            </div>
       @endif
  @endif
    {{--@if(isset($data) && $data->type=='about-us')
        @if(isset($team))
            <div class="section">
            <div class="container">
            <div class="row">
                <div class="heading-box">
                    <h2 class="box-title">Creative People Behind the Curtain</h2>
                    <p class="desc-lg">Meet the creative heads behind all the bZm Graphics :)</p>
                </div>

                @foreach($team as $teams)
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <div class="team-member style-default box">
                            <div class="image-container">
                                <img alt="{{$teams->first_name}} {{$teams->first_name}}" src="{{$teams->image}}">
                            </div>
                            <div class="team-member-author">
                                <h4 class="team-member-name">{{$teams->first_name}} {{$teams->last_name}}</h4>
                                <span class="team-member-job">{{$teams->designation}}</span>
                            </div>
                            <div class="team-member-social">
                                <div class="social-icons style1 size-sm">
                                    <a title="" data-placement="top" data-toggle="tooltip" class="social-icon" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a title="" data-placement="top" data-toggle="tooltip" class="social-icon" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a title="" data-placement="top" data-toggle="tooltip" class="social-icon" href="#" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a title="" data-placement="top" data-toggle="tooltip" class="social-icon" href="#" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
            </div>
        @endif
    @endif--}}


@stop