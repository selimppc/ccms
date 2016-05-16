@extends('web::layout.web_master')

@section('content')

    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Blog Items</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="active">Blog Items</li>
        </ul>
    </div>
    <div id="main">

        <div class="container">
            <div class="row">
                <div id="main" class="col-sm-9">
                    <article class="post box-lg">
                        <div class="post-date">
                        </div>
                        <div class="post-image" style="padding-top: 40px;">
                            <div class="image-container">
                                <a href="{{isset($data->image)?$data->image:''}}"></a>
                                <a href="#"><img alt="" src="{{isset($data->image)?$data->image:''}}"></a>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-action" style="margin-top: 20px;">
                                {{--<a href="#" class="btn btn-sm"><i class="fa fa-heart"></i>480</a>--}}
                                {{--<a href="#" class="btn btn-sm"><i class="fa fa-share"></i>Share</a>--}}
                            </div>
                            <h2 class="entry-title"><a href="#">{{isset($data->title)?$data->title:''}}</a></h2>
                            <div class="post-meta">
                                <span class="entry-author fn">by <a href="#">Admin</a></span>
                                <span class="post-category">in <a href="#">Web Design</a></span>
                                <span class="post-comment"><a href="#">1 Comment</a></span>
                            </div>
                            <p>{{ isset($data->desc)?substr($data->desc, 0,600):''}}</p>
                            <div class="tags">
                                {{--<a href="#" class="tag">Masonry</a>--}}
                                {{--<a href="#" class="tag">Responsive</a>--}}
                                {{--<a href="#" class="tag">Retina</a>--}}
                            </div>
                        </div>
                    </article>
                </div>
                <div class="sidebar col-sm-3">
                    <div class="main-mini-search-form full-width box">
                        {{--<form method="get" role="search">
                            <div class="search-box">
                                <input type="text" placeholder="Search" name="s" value="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>--}}
                    </div>
                    <div class="box margin">
                        @if($a =\Event::fire(new \App\Events\MyWidgets) )
                            <?php echo($a[2]); ?>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .margin{
            margin-left: 49px;
            margin-bottom: 38px;
        }
    </style>

@stop