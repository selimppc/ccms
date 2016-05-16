@extends('web::layout.web_master')

@section('content')

    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Free Trial</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="active">Free Trial</li>
        </ul>
    </div>
        <div id="main">
            <!--  Google Map   -->
            <section style="width:58%; padding: 0; margin-left: 5%; margin-top: 27px;text-align: center">
            </section>

            <div class="container">
                <div style="width:64%;margin-top: 27px;text-align: center">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if(Session::has('message'))
                        <div class="alert-info">
                            <p>{{ Session::get('message') }}</p>
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <p>{{ Session::get('error') }}</p>
                        </div>
                    @endif
                </div>
            <section id="content">
                <div class="section container">
                    <div class="row">
                        <div class="col-sm-8 box">
                            {!! Form::open(array('route'=>['contact-free-trial'],'files'=>true)) !!}
                                <div class="form-group col-sms-12 col-sm-12">
                                    {!! Form::text('name', null, ['id'=>'id-name','class' => 'form-control input-text full-width','required','placeholder'=>'Name (required)' ]) !!}
                                </div>
                                <div class="form-group col-sms-12 col-sm-12">
                                    {!! Form::email('email', null, ['id'=>'id-email','class' => 'form-control input-text full-width','required','placeholder'=>'Email Address (required)']) !!}
                                </div>
                                <div class="form-group col-sms-12 col-sm-12">
                                    {!! Form::text('phone', null, ['id'=>'id-phone','class' => 'form-control input-text full-width','required','placeholder'=>'Phone Number (required)']) !!}
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4">
                                       {!! Form::file('file1', array('required','title'=>'Browse 1 (required)')) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Form::file('file2', array('title'=>'Browse 2')) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Form::file('file3', array('title'=>'Browse 3')) !!}
                                    </div>
                                </div>

                            <div class="form-group col-sm-12 col-sm-12 free-trial-msg">
                                {!! Form::textarea('message', null, ['id'=>'id-message','class' => '','required','placeholder'=>'Send Message (required)']) !!}
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3">
                                     <button type="submit" class="btn">Get A Free Trial</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="col-sm-4">
                            <ul class="contact-address style1">
                                <li class="office-address">
                                    <div class="span6">
                                        <h4>Office Locations</h4>
                                        <ul class="location-list row">
                                            {{--<li class="span2">
                                                <p class="location-name">United Kingdom:</p>
                                                <p>340 barking road, <br/>
                                                    London<br/>
                                                    E13 8HL <br/>
                                                    UK</p>
                                            </li>--}}
                                            <li class="span4">
                                                <p class="location-name">Bangladesh:</p>
                                                <p>House- 6, Road-5, Block-B, Section-3,<br/>
                                                    Kaderabad housing, <br/>
                                                    Mohammedpur <br/>
                                                    Dhaka-1207</p>
                                            </li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li class="mobile-number">
                                                <p style="margin-left: 20px;"><a href="callto:+8801916075973">+8801916075973</a>

                                                </p>
                                            </li>
                                            <li class="email-address" > <a href="mailto:hello@bzmgraphics.com" style="margin-left: 22px;">hello@bzmgraphics.com</a> </li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <style>
        .location-name {
            padding-left: 20px;
            background: url(./etsb/web_assets/images/location.png) no-repeat;
        }

        .mobile-number {
            background: url(./etsb/web_assets/images/mobile.png) no-repeat 0px 0px;
        }

        .email-address {
            background: url(./etsb/web_assets/images/email2.png) no-repeat 0px 5px;
        }
    </style>
@stop