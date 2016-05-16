@extends('web::layout.web_master')

@section('content')

    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">Contact Us</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="active">Contact Us</li>
        </ul>
    </div>

    <div class="container">
        <div id="main">
            <!--  Google Map   -->
            <section style="width:120%; padding: 0; margin-left: -7%; margin-top: 10px;margin-bottom: 30px;">
                <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
                <div id="map_div" style="height: 400px;"></div>
                <script type="text/javascript" src="etsb/google_map/google_map.js"></script>
            </section>
            <span class="pull-left" id="success-message" style="color: cornflowerblue; font-weight: bold"></span>

            <section id="content">
                <div class="section container">
                    <div class="row">
                        <div class="col-sm-8 box">
                            {!! Form::open(array('route'=>['ajax-send-message'],'id'=>'send-messages-form')) !!}
                                <div class="row">
                                    <div class="form-group col-sms-6 col-sm-6">
                                        {!! Form::text('first_name', null, ['id'=>'id-first-name','class' => 'form-control input-text full-width','required','placeholder'=>'First Name (required)']) !!}
                                    </div>
                                    <div class="form-group col-sms-6 col-sm-6">
                                        {!! Form::text('last_name', null, ['id'=>'id-last-name','class' => 'form-control input-text full-width','required','placeholder'=>'Last Name']) !!}
                                    </div>
                                    <div class="form-group col-sms-6 col-sm-6">
                                        {!! Form::email('email', null, ['id'=>'id-email','class' => 'form-control input-text full-width','required','placeholder'=>'Email Address (required)']) !!}
                                    </div>

                                    <div class="form-group col-sms-6 col-sm-6">
                                        {!! Form::text('website', null, ['id'=>'id-website','class' => 'form-control input-text full-width','placeholder'=>'Website']) !!}
                                    </div>
                                    <div class="form-group col-sm-12 col-sm-12">
                                        {!! Form::textarea('message', null, ['id'=>'id-message','class' => '','required','placeholder'=>'Send Message (required)']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md style1 submit-button">Submit</button>
                                </div>
                                <div style="display: none" id="loader-gif">
                                    <img src="etsb/img/loader/loading.gif" width="20px" /> sending ...
                                </div>
                            {!! Form::close() !!}
                            <div style="display: none" id="success-messagessss" >
                                <b style="color: darkgreen">Thanks for submitting your query. We will get back to you soon!</b>
                            </div>
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

    <script>
        $(function(){
            $( '#send-messages-form').on('submit', function(e) {
                $('#loader-gif').show();
                $('.submit-button').hide();
                e.preventDefault();

                var first_name =  $('#id-first-name').val();
                var last_name =  $('#id-last-name').val();
                var email =  $('#id-email').val();
                var website =  $('#id-website').val();
                var message =  $('#id-message').val();
                $.ajax({
                    url: 'ajax-send-message',
                    type: 'POST',
                    dataType: 'json',
                    data:{_token: '{!! csrf_token() !!}', first_name:first_name, last_name:last_name, email:email, website:website, message:message,},
                    success: function(response)
                    {
                        $('#loader-gif').hide();
                        $('#id-first-name').val('');
                        $('#id-last-name').val('');
                        $('#id-email').val('');
                        $('#id-website').val('');
                        $('#id-message').val('');
                        $('#success-messagessss').show();
                        $('.submit-button').show();
                    }
                });
            });
        });
    </script>

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