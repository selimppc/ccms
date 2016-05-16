@extends('web::layout.web_master')

@section('content')

    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Search Result</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="active">Search-Result</li>
        </ul>
    </div>
    <div id="main">

        <div class="container">
            <section id="content">
                <div class="section container" style="margin-top:40px">
                    <div class="row">
                        <div class="col-sm-9 box">
                            @if(count($data)>0)
                                <span style="margin-left: 3.5%;">{{ "Search Result found with "}} <b style="color: green; font-style: italic;">{{$q}}</b></span>
                                @foreach($data as $values)
                                    <div class="col-sm-2" style="padding: 25px 0px 0px 25px">
                                        @if(isset($values->thumbnail))
                                            <img src="{{ $values->featured_image }}" style="border: solid 1px #aaa; padding: 2px;">
                                        @else
                                            <img src=""  style="border: solid 1px #aaa;">
                                        @endif
                                    </div>

                                    <div class="col-sm-9">
                                        <div class="col-sm-12">
                                            <a href="{{URL::to($values->type)}}" class="btn-link"> <h3>{{$values->title}}</h3></a>
                                        </div>

                                        <div class="col-sm-12">
                                            {{ strip_tags(substr($values->desc, 0, 600)) }}
                                        </div>

                                        <div class="col-sm-12" >
                                            <a href="{{URL::to($values->type)}}" class="btn-link"> Read more ... </a>
                                        </div>

                                    </div>

                                @endforeach
                            @else
                                <span style="margin-left: 3.5%;">{{ "No Result found with "}} <b style="color: red; font-style: italic;">{{$q}} </b> {{" please try again"}}</span>
                            @endif
                        </div>

                        <div class="col-sm-3">
                            @if($a =\Event::fire(new \App\Events\MyWidgets) )
                              <?php echo($a[2]); ?>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



@stop