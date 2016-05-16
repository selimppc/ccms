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
                <h1 class="entry-title">About Us</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            <li><a href="#">PAGES</a></li>
            <li class="active">About Us</li>
        </ul>
    </div>

    <section id="content_aboutus">

        <div class="image-banner banner-image1">
            <div class="banner-color1">
                <div class="section container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="image-container fixed">
                                <img src="etsb/web_assets/images/mac.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="box-title">Miracle is Premium Wordpress Theme</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus elit, tincidunt nec turpis sed, accumsan iaculis ipsum. Nulla at augue auctor, tristique erat in, ultricies nunc. Mauris eget metus leo. Ut in mi lacinia, mattis nisl non, ultrices risus. Vestibulum aliquet aliquam ipsum ut ullamcorper. Pellentesque fringilla, massa vel rutrum consequatla velit fermentum dolor sed scelerisquesed ex assum omnium contentiones. Nobis suavitate moderatius has ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                            <br>
                            <a href="#" class="btn style4 bg-white">Know More</a>
                            <a href="#" class="btn style4 bg-white">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row add-clearfix">
                    <div class="col-sms-6 col-sm-6 col-md-4">
                        <div class="icon-box style-side-1 box">
                            <i class="fa fa-eye"></i>
                            <div class="box-content">
                                <h4 class="box-title"><a href="#">Retina Ready</a></h4>
                                <p>Class aptent taciti sociosqu ad litora torqent conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sms-6 col-sm-6 col-md-4">
                        <div class="icon-box style-side-1 box">
                            <i class="fa fa-laptop"></i>
                            <div class="box-content">
                                <h4 class="box-title"><a href="#">Multi-Purpose</a></h4>
                                <p>Class aptent taciti sociosqu ad litora torqent conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sms-6 col-sm-6 col-md-4">
                        <div class="icon-box style-side-1 box">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="box-content">
                                <h4 class="box-title"><a href="#">WooCommerce Ready</a></h4>
                                <p>Class aptent taciti sociosqu ad litora torqent conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row add-clearfix">
                    <div class="col-sms-6 col-sm-6 col-md-4">
                        <div class="icon-box style-side-1 box">
                            <i class="fa fa-umbrella"></i>
                            <div class="box-content">
                                <h4 class="box-title"><a href="#">Awesome Support</a></h4>
                                <p>Class aptent taciti sociosqu ad litora torqent conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sms-6 col-sm-6 col-md-4">
                        <div class="icon-box style-side-1 box">
                            <i class="fa fa-thumbs-o-up"></i>
                            <div class="box-content">
                                <h4 class="box-title"><a href="#">Modern Design</a></h4>
                                <p>Class aptent taciti sociosqu ad litora torqent conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sms-6 col-sm-6 col-md-4">
                        <div class="icon-box style-side-1 box">
                            <i class="fa fa-star"></i>
                            <div class="box-content">
                                <h4 class="box-title"><a href="#">Weekly Updates</a></h4>
                                <p>Class aptent taciti sociosqu ad litora torqent conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="callout-box style1 parallax parallax-image6" data-stellar-background-ratio="0.5">
            <div class="callout-box-wrapper bg-blue">
                <div class="container">
                    <div class="row same-height">
                        <div class="col-md-8 callout-content-container" style="height: 585px;">
                            <div class="callout-content section">
                                <div class="st-table box-xl">
                                    <div class="callout-text">
                                        <h3>Amateurs wait for inspiration creatives get up &amp; go to work!</h3>
                                    </div>
                                    <div class="callout-action">
                                        <a class="btn style4" href="#">know more</a>
                                        <a class="btn style4" href="#">purchase</a>
                                    </div>
                                </div>
                                <div class="row box-xl">
                                    <div class="col-sms-6 col-sm-3">
                                        <div class="circle-wrap box">
                                            <div class="circle-progress font-light circliful" data-bgcolor="#1b2f48" data-fgcolor="#ffffff" data-percent="90" data-text="90" data-dimension="110" data-bordersize="4" data-fontsize="30" style="width: 110px;"><span class="circle-text" style="line-height: 110px; font-size: 30px;">90</span><canvas width="110" height="110"></canvas></div>
                                            <div class="fontsize-lg">Projects Completed</div>
                                        </div>
                                    </div>
                                    <div class="col-sms-6 col-sm-3">
                                        <div class="circle-wrap box">
                                            <div class="circle-progress font-light circliful" data-bgcolor="#1b2f48" data-fgcolor="#ffffff" data-percent="50" data-text="50" data-dimension="110" data-bordersize="4" data-fontsize="30" style="width: 110px;"><span class="circle-text" style="line-height: 110px; font-size: 30px;">50</span><canvas width="110" height="110"></canvas></div>
                                            <div class="fontsize-lg">Work in Progress</div>
                                        </div>
                                    </div>
                                    <div class="col-sms-6 col-sm-3">
                                        <div class="circle-wrap box">
                                            <div class="circle-progress font-light circliful" data-bgcolor="#1b2f48" data-fgcolor="#ffffff" data-percent="75" data-text="75" data-dimension="110" data-bordersize="4" data-fontsize="30" style="width: 110px;"><span class="circle-text" style="line-height: 110px; font-size: 30px;">75</span><canvas width="110" height="110"></canvas></div>
                                            <div class="fontsize-lg">Happy Customers</div>
                                        </div>
                                    </div>
                                    <div class="col-sms-6 col-sm-3">
                                        <div class="circle-wrap box">
                                            <div class="circle-progress font-light circliful" data-bgcolor="#1b2f48" data-fgcolor="#ffffff" data-percent="65" data-text="65" data-dimension="110" data-bordersize="4" data-fontsize="30" style="width: 110px;"><span class="circle-text" style="line-height: 110px; font-size: 30px;">65</span><canvas width="110" height="110"></canvas></div>
                                            <div class="fontsize-lg">Repeat Customers</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-sm">
                                    <div class="desc-lg">
                                        Providing best facilities &amp; workplace perks to our employees.
                                    </div>
                                    <div class="desc-sm">* All pages of miracle are handcrafted and pixel perfect.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="height: 585px;">
                            <div class="callout-image-container">
                                <div class="callout-image">
                                    <img src="etsb/web_assets/images/man.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="heading-box">
                    <h2 class="box-title">Creative People Behind the Curtain</h2>
                    <p class="desc-lg">Meet the creative heads behind all the Miracle :)</p>
                </div>
                <div class="row">
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <div class="team-member style-default box">
                            <div class="image-container">
                                <img alt="" src="etsb/web_assets/images/1.jpg">
                            </div>
                            <div class="team-member-author">
                                <h4 class="team-member-name">Aleesha Brown</h4>
                                <span class="team-member-job">Marketing</span>
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
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <div class="team-member style-default box">
                            <div class="image-container">
                                <img alt="" src="etsb/web_assets/images/2.jpg">
                            </div>
                            <div class="team-member-author">
                                <h4 class="team-member-name">Mike Harward</h4>
                                <span class="team-member-job">administration</span>
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
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <div class="team-member style-default box">
                            <div class="image-container">
                                <img alt="" src="etsb/web_assets/images/3.jpg">
                            </div>
                            <div class="team-member-author">
                                <h4 class="team-member-name">Adelia Lorene</h4>
                                <span class="team-member-job">Development</span>
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
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <div class="team-member style-default box">
                            <div class="image-container">
                                <img alt="" src="etsb/web_assets/images/4.jpg">
                            </div>
                            <div class="team-member-author">
                                <h4 class="team-member-name">Chris Dand</h4>
                                <span class="team-member-job">design</span>
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
                </div>
            </div>
        </div>
    </section>

@stop