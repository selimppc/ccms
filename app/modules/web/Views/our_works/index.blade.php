@extends('web::layout.web_master')

@section('content')

    <script type="text/javascript">
        var mainStyle = "style.css";
        if (typeof localStorage != "undefined") {
            var colorSkin = localStorage.getItem("miracleColorSkin");
            if (colorSkin != null) {
                mainStyle = "style-" + colorSkin + ".css";
            }
        }
        document.write('<link id="main-style" rel="stylesheet" href="css/' + mainStyle + '">');
    </script>

    <style>
        .post-filters {
            margin-top: 40px;
        }

        .container2 {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-left: 0px;
            padding-right: 0px;
        }
    </style>


    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">{{$title}}</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="active">{{$title}}</li>
        </ul>
    </div>

    <div class="container2">
        <div id="main">
            <div class="post-wrapper isotope-active">
                <div class="post-filters">

                    <a href="#" class="btn btn-sm style4 hover-blue active" data-filter="filter-all">All</a>

                    <?php $previous_id = false; ?>

                    @if($data)
                        @foreach($data as $category_data)
                            @if ($category_data->title !== $previous_id)
                            <a href="#" class="btn btn-sm style4 hover-blue" data-filter="{{ $category_data->cat_gallery_id }}">{{ $category_data->title }}</a>
                            <?php $previous_id = $category_data->title; ?>
                           @endif
                        @endforeach
                    @endif
                    {{--<a href="#" class="btn btn-sm style4 hover-blue active" data-filter="filter-all">All</a>
                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="filter-logo">Logo</a>
                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="filter-business">Business</a>
                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="filter-website">Website</a>--}}
                </div>



                <div style="position: relative; height: 1040.15px;" class="iso-container iso-col-3 style-fancy active">

                    @foreach($data as $image_data)

                        <div style="position: absolute; left: 0px; top: 0px;" class="iso-item filter-all {{ $image_data->cat_gallery_id }}">
                            <article class="post">
                                <figure><img src="{{$image_data->thumbnail}}" alt="{{$image_data->name}}"></figure>
                                <div class="portfolio-hover-holder">
                                    <div class="portfolio-text">
                                        <div class="portfolio-text-inner">
                                            <h5 class="portfolio-title">{{$image_data->name}}</h5> - <span class="portfolio-category">Fashion</span>
                                        </div>
                                    </div>
                                        <span class="portfolio-action">
                                            <a class="soap-mfp-popup" href="{{$image_data->image}}"><i class="fa fa-eye has-circle"></i></a>
                                            <a href="#"><i class="fa fa-chain has-circle"></i></a>
                                        </span>
                                </div>
                            </article>
                        </div>
                    @endforeach


                </div>
                <div class="text-center">
                    <a href="#" class="btn style4 hover-blue load-more">Load More</a>
                </div>
            </div>
        </div>
    </div>


@stop