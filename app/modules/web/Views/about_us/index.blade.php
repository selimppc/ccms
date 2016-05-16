@extends('web::layout.web_master')

@section('content')

    <div class="page-title-container">
        <div class="page-title">
            <div class="container">
                <h1 class="entry-title">About Us</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="active">About Us</li>
        </ul>
    </div>

    <div class="container">
        <div class="we-are-area">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="we-are">
                            <p class="discription">A Complete Creative Studio</p>
                        </div>
                        <div class="man we-are-about row">
                            <div class="span2"> <img src="./bZm Graphics _ About _ Image Editing Services_files/we.png"> </div>
                            <div class="span10">
                                <div class="about-pera">
                                    <p><strong>bZm Graphics</strong> is a Creative studio with 100+ Photoshop and Illustrator experts with an aim to provide excellent Photo editing and Graphics designing services. Our services include Clipping path, Retouching, Photo Masking, Shadow creation, Color correction, Background remove and many more. We are providing services to Newspapers, Magazines, Advertising Agencies, Ecommerce Site Management Firms, Product and Fashion Photographers, Prepress Agencies, Printing &amp; Publishing Companies around the world and fulfilling their graphics design and image editing needs.</p>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="trial-button-area"> <a href="http://bzmgraphics.com/free-trial.html" class="trial-button"> &nbsp;&nbsp; Free Trial</a> </div>
                        </div>
                        <div class="row we-are-about">
                            <div class="span3"> <i class=""></i>
                                <h3>3000+ Images<br>
                                    A Day/ Average</h3>
                                <p>By ensuring quality service &amp; meeting the Deadlines, we can process number of images you can imagine.</p>
                            </div>
                            <div class="span3">
                                <h3>100+ <br>
                                    Designers</h3>
                                <p>Dedicated in-house employees to deliver quality clipping paths, masks, retouch, neck join and other image editing services.</p>
                            </div>
                            <div class="span3">
                                <h3>100% assured Quality</h3>
                                <p>3 layer quality checks to ensure what you get is just perfect.</p>
                            </div>
                            <div class="span3">
                                <h3>24x7x365<br>
                                    Customer Services</h3>
                                <p>We are committed to quicker response. Answering your queries, valuing your values is all we care about.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop