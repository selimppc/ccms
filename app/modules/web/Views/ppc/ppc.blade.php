<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>bzm graphics | Providing Quality Image editing services</title>
    <meta name="description" content="bZm Graphics is the best place, if you need bulk image editing service with great quality, fast turnaround time and cheaper price. bZm Graphics provides Solutions for your Photo Editing & Graphics Design Needs with picture perfect quality.">
    <meta name="keywords" content="Image Masking, Clipping Path, Color Correction, Shadow, Reflection, photo, editing, graphics">
    <meta name="Copyright" content="bzmgraphics.com">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Libs CSS -->
    <link href="{{ URL::asset('etsb/ppc/css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/ppc/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('etsb/ppc/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" media="all">

    <!-- Template CSS -->
    <link href="{{ URL::asset('etsb/ppc/css/style.css') }}" rel="stylesheet" type="text/css" >

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800&amp;subsetting=all' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ URL::asset('etsb/ppc/js/html5shiv.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('etsb/ppc/js/respond.js') }}"></script>
    <![endif]-->



</head>

<body data-spy="scroll" data-target=".navigation">
<!-- Start Header -->
<header id="header">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!-- Start Logo / Text -->
                <a class="navbar-brand" href="index.html">
                    {!! Html::image('/etsb/ppc/img/logo.png', 'bzm graphics', array('width'=>"132", 'height'=>"52")) !!}

                </a>

                <!-- End Logo / Text -->
            </div>
            <!-- Start Navigation -->
            <div class="navigation navbar-collapse collapse">
                <ul class="nav navbar-nav menu-right">
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </div>
            <!-- End Navigation  -->
        </div>
    </nav>
</header>
<!-- End Header -->

<!-- Start Banner -->
<div id="banner">
    <div class="banner-inner">
        <div class="container">
            <div class="row">
                <!-- Start Header Text -->
                <div class="col-md-8 col-sm-7 header-text">
                    <h1>Every  <strong>Pixel</strong> Matters</h1>
                    <p>Let our Creativity and Experience of Photo / Image Editing  help you to make your Project <br>
                        <span style="color:#fff; font-size:20px;">Easier, Cheaper and Faster.</span></p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul class="green-arrow">
                                <li>Clipping Path</li>
                                <li>Image Masking</li>
                                <li>Color Correction</li>
                                <li>Photo Retouching</li>
                                <li>Image Manipulation</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul class="green-arrow">
                                <li>Shadow &amp; Reflection Creation</li>
                                <li>Image Optimization</li>
                                <li>Photo Album Creation</li>
                                <li>Desktop Publishing</li>
                                <li>Glamour Enhanchments</li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- End Header Text -->
                <!-- Start Banner Optin Form-->
                <div class="col-lg-4 col-md-4 col-sm-5">
                    {{--<form id="banner-form" action="banner-process.php" method="post" enctype="multipart/form-data" name="banner_form">--}}
                        {!! Form::open(['route' => 'index/ppc-free-trial','files'=>'true'], array('name'=>"banner_form")) !!}

                        <div class="banner-optin vertical">
                            <h1>Start your <strong>FREE</strong> trial</h1>
                            <div class="form-group">
                                <input name="name" id="banner-name" type="text" required class="form-control" required placeholder="Your Name">

                            </div>
                            <div class="form-group">
                                <input name="email" id="banner-email" type="text" required="required" class="form-control" required placeholder="Your e-mail">
                            </div>
                            <div class="form-group">
                               {{-- <input name="phone" id="banner-phone" type="text" class="form-control" placeholder="Your Phone Number">--}}
                                <textarea  placeholder="Instructions" rows="2" name="message" required="required" ></textarea>
                            </div>
                            <div class="form-group">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="top"><input type="file" required="required" placeholder="You have to upload at least one file, You can upload up to 3 files." title="Upload First File"  name="file1" id="file" class="paddingbottom15" ></td>
                                        <td valign="top"><a href="#" id="addmorefile" class="btn" title="Add another file"><i class="fa fa-plus"></i></a></td>
                                    </tr>
                                </table>
                                <input type="file"  class="hide paddingbottom15" title="Upload Second File"  name="file2" id="file2">
                                <input type="file" class="hide paddingbottom15"  title="Upload Third File"  name="file3" id="file3">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-submit">Get Your Free Trial</button>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-process"></div>
                                <!-- Displays status when submitting form -->
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <div id="message"><h2 style="color:#fff;">&nbsp;</h2></div>
                </div>
                <!-- End Banner Optin Form -->
            </div>
            <div class="divider50"></div>
        </div>
    </div>
</div>

<div style="text-align: center">
    @if(Session::has('message'))
        <div class="alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
</div>


<!-- End Banner -->
<!-- Portfolio -->
<section id="portfolio" class="bg-grey section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h1>See our works.</h1>
                    <p>Some examples what we did.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    {!! Html::image('/etsb/ppc/img/thumbs/clippingpath2.jpg', 'clipping Path', array('class'=>"mg-responsive img-thumbnail")) !!}
                    <!-- Image Thumbnail  -->
                    <div class="img-cover">

                        <a href={{ URL::asset('etsb/ppc/img/full/clippingpath2.jpg') }} class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a>

                        <!-- Large Image  -->
                        <h3>Clipping Path</h3>
                        <!-- Image Description  -->
                    </div>
                </div>
               <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details"> <img class="img-responsive img-thumbnail" src="{{ URL::asset('etsb/ppc/img/thumbs/clippingpath5.jpg') }}" alt="Clipping path" title="" /><!-- Image Thumbnail  -->

                   <div class="img-cover"> <a href={{ URL::asset('etsb/ppc/img/full/clippingpath5.jpg') }} class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Clipping Path</h3>
                        <!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->

                <div class="hover-details"> <img class="img-responsive img-thumbnail" src="{{ URL::asset('etsb/ppc/img/thumbs/hairmasking1.jpg') }}" alt="Image Masking" title="" /><!-- Image Thumbnail  -->

                    <div class="img-cover"> <a href={{ URL::asset('etsb/ppc/img/full/hairmasking1.jpg') }} class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Photo Masking</h3>
                        <!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details"> <img class="img-responsive img-thumbnail" src="{{ URL::asset('etsb/ppc/img/thumbs/colorcorrection3.jpg') }}" alt="Color Correction" title="" /><!-- Image Thumbnail  -->

                    <div class="img-cover"> <a href={{ URL::asset('etsb/ppc/img/full/colorcorrection3.jpg') }} class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->

                        <h3>Color Correction</h3>
                        <!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details"> <img class="img-responsive img-thumbnail" src="{{ URL::asset('etsb/ppc/img/thumbs/glamourenhencement.jpg') }}" alt="Glamour Enhencement" title="" /><!-- Image Thumbnail  -->

                    <div class="img-cover"> <a href={{ URL::asset('etsb/ppc/img/full/glamourenhencement.jpg') }} class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->

                        <h3>Glamour Enhancement</h3>

                        <!-- Image Description  -->

                    </div>

                </div>

                <!-- End Portfolio Item  -->

            </div>

            <div class="col-xs-6 col-sm-6 col-md-3">

                <!-- Start Portfolio Item -->

                <div class="hover-details"> <img class="img-responsive img-thumbnail" src="{{ URL::asset('etsb/ppc/img/thumbs/image_manipulation2.jpg') }}" alt="Image Manipulation" title="" /><!-- Image Thumbnail  -->

                    <div class="img-cover"> <a href={{ URL::asset('etsb/ppc/img/full/image_manipulation2.jpg') }} class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->

                        <h3>Image Manipulation</h3>

                        <!-- Image Description  -->

                    </div>

                </div>

                <!-- End Portfolio Item  -->

            </div>

            <div class="col-xs-6 col-sm-6 col-md-3">

                <!-- Start Portfolio Item -->

                <div class="hover-details"> <img class="img-responsive img-thumbnail" src="{{ URL::asset('etsb/ppc/img/thumbs/shadow5.jpg') }}" alt="Shadow Making" title="" /><!-- Image Thumbnail  -->

                    <div class="img-cover"> <a href={{ URL::asset('etsb/ppc/img/full/shadow5.jpg') }} class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->

                        <h3>Shadow Making</h3>

                        <!-- Image Description  -->

                    </div>

                </div>

                <!-- End Portfolio Item  -->

            </div>

            <div class="col-xs-6 col-sm-6 col-md-3">

                <!-- Start Portfolio Item -->

                <div class="hover-details"> <img class="img-responsive img-thumbnail" src="{{ URL::asset('etsb/ppc/img/thumbs/desktoppublishig2.jpg') }}" alt="Desktop Publishing" title="" /><!-- Image Thumbnail  -->

                    <div class="img-cover"> <a href={{ URL::asset('etsb/ppc/img/full/desktoppublishig2.jpg') }} class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->

                        <h3>Desktop Publishing</h3>

                        <!-- Image Description  -->

                    </div>

                </div>

                <!-- End Portfolio Item  -->

            </div>

        </div>

    </div>

</section>

<!-- End Portfolio -->



<!-- Start Features -->
<section id="features" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h1 class="secondary-heading">Best Choice for  Online Retailers, Creative and Advertising Agencies</h1>
                    <p class="heading-center">We are so sure that you will love our image editing service because we guarantee all of our work. If you are not satisfied with our services, we will refund all of your money.</p>
                </div>
            </div>
        </div>
        <div class="divider35"></div>
        <div class="row">
            <!-- Features Listing -->
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list"> <i class="fa fa-paw fa-5x"></i><!-- Features Icon -->
                            <h4>Less Risky. Try Us</h4>
                            <!-- Features Title -->
                            <p>your contact information and images are safe with us.</p>
                            <!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list"> <i class="fa fa-slack fa-5x"></i><!-- Features Icon -->
                            <h4>Quick And Easy</h4>
                            <!-- Features Title -->
                            <p>bzm delivered your project within 12 hours with High quality.</p>
                            <!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- Features List -->
                        <div class="features-list"> <i class="fa fa-sliders fa-5x"></i><!-- Features Icon -->
                            <h4>Support 24/7</h4>
                            <!-- Features Title -->
                            <p>We are providing 24/7 Customer Support for your needs.</p>
                            <!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list"> <i class="fa fa-file fa-5x"></i><!-- Features Icon -->
                            <h4>Scalable</h4>
                            <!-- Features Title -->
                            <p>We Delivered your project after reviewing three times. Best Quality Ever.</p>
                            <!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                </div>
                <div class="row last-row">
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list"> <i class="fa fa-database fa-5x"></i><!-- Features Icon -->
                            <h4>Customise Your Job</h4>
                            <!-- Features Title -->
                            <p>Our team customize your project fully then delivered at your time !</p>
                            <!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                       <div class="features-list"> <i class="fa fa-cog fa-5x"></i><!-- Features Icon -->
                            <h4>User Friendly Environment</h4>
                            <!-- Features Title -->
                            <p>We are here for your business and save your money!</p>
                            <!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                </div>
            </div>
            <!-- End Features Listing -->
            <!-- Side Features Image -->
            <div class="col-lg-4 col-md-4"> <img src="{{ URL::asset('etsb/ppc/img/gurantee.png') }}" class="img-responsive" alt="" title="" /> </div>
            <!-- End Side Features Image -->
        </div>
    </div>
</section >

<!-- End Features -->
<section class="section20">
    <div class="container">
        <div class="row">
            <div class="headline">
                <h1>Get Started Right Now</h1>
                <p>Submit 3 Free Trial to check our top notch quality at rock-bottom price.</p>
            </div>
            <div class="cta-container container margin_bottom50">

                <a class="col-xs-6 cta-free-trial cta-left" href="#">Free Trial</a>
                <a class="col-xs-6 cta-free-trial cta-right" href="#">Get Started</a>

            </div>
        </div>
    </div>
</section>
<!--Start Footer-->
<footer id="footer" class="section nopadding-bottom">
    <div class="container">
        <div class="row">
            <!--Footer About Description -->
            <div class="col-md-3 col-sm-6">
                <h4>About bzm graphics</h4>
                <p>bZm Graphics is the best place, if you need bulk image editing service with great quality, fast turnaround time and cheaper price. bZm Graphics provides Solutions for your Photo Editing & Graphics Design Needs with picture perfect quality.</p>
                <hr/>
                <h4>Popular Services</h4>
                <ul class="quick-links">
                    <li><a href="http://bzmgraphics.com/image-masking" target="_blank">Image Masking</a></li>
                    <li><a href="http://bzmgraphics.com/photoshop-clipping-path" target="_blank">Clipping Path</a></li>
                    <li><a href="http://bzmgraphics.com/color-separation-correction" target="_blank">Color Correction</a></li>
                    <li><a href="http://bzmgraphics.com/shadow-and-reflection-creation" target="_blank">Shadow &amp; Reflection</a></li>
                    <li><a href="http://bzmgraphics.com/contact-us" target="_blank">Support</a></li>
                </ul>
            </div>
            <!-- End Footer About Description -->

            <!-- Start Contact Details  -->
            <div class="col-md-4 col-sm-6">
                <div class="contact-info">
                    <h4>Where to find us</h4>
                    <ul class="contact-list">
                        <li style="padding-bottom:10px;"><i class="fa fa-map-marker"></i>Address<br>
                            House- 6, Road-5, Block-B, Section-3,<br>
                            Kaderabad Housing,<br>
                            Mohammadpur, Dhaka-1207

                        <li><i class="fa fa-phone"></i>+88 01916075973</li>
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:arman@bzmgraphics.com">arman@bzmgraphics.com</a></li>
                    </ul>
                </div>
                <!-- End Contact Details  -->
                <hr/>
                <div class="social">
                    <h4>We are Social&nbsp;&nbsp;<i class="fa fa-group" style="font-weight:normal; color:#0085c3;"></i></h4>
                    <!-- Start  Social Links -->
                    <ul class="social">
                        <li class="facebook"> <a href="https://www.facebook.com/pages/bZm-Graphics/157687504299957" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                        <li class="twitter"> <a href="https://twitter.com/BZMGraphics" target="_blank"> <i class="fa fa-twitter"></i> </a> </li>
                        <li class="google-plus"> <a href="https://plus.google.com/u/0/b/102881161542509581883/+Bzmgraphics_bd/posts" target="_blank"> <i class="fa fa-google-plus"></i> </a> </li>
                        <li class="linkedin"> <a href="https://www.linkedin.com/company/bzm-graphics?trk=company_logo" target="_blank"> <i class="fa fa-linkedin"></i> </a> </li>
                        <li class="skype"> <a href="skype:bzmgraphics?call"> <i class="fa fa-skype"></i> </a> </li>
                    </ul>
                    <!-- End Social Links  -->
                </div>
            </div>
            <div class="col-md-5 bottom-contact">
                <h4>Get in Touch</h4>
                <p>Send us your query.</p>
                <!-- Start Contact Form  -->
                {{--<form id="contact-form" class="contact-form" method="post" action="index/pf-contact">--}}

                {!! Form::open(['route' => 'index/pf-contact','files'=>'true'], array('id'=>"contact-form", 'class'=>"contact-form")) !!}

                    <div class="form-group">
                        <input name="contact_name" id="contact-name" required type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="contact_email" id="contact-email" required type="text" class="form-control" placeholder="Your e-mail">
                    </div>
                    <div class="form-group">
                        <input name="contact_phone" id="contact_phone"  type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <textarea name="contact_message" id="contact_message" required class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-submit">Submit</button>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-process-contact"></div>
                        </div>
                    </div>
                {!! Form::close() !!}
                        {{--</form>--}}
                <!-- End Contact Form  -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row footer-bottom">
            <div class="col-lg-6 col-sm-6">
                <p>&copy; 2014 <a href="http://bzmgraphics.com/" target="_blank">bzm graphics</a>. All Right Reserved</p>
            </div>
        </div>
    </div>
</footer>

<!-- Start Scroll To Top  -->
<a href="#" class="scroll-up"><i class="fa fa-arrow-up"></i></a>
<!-- End Scroll To Top  -->


<!-- Start Js Files -->

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<!--jQuery is a Javascript library that greatly reduces the amount of code that you must write.-->
<script type="text/javascript">
    window.jQuery || document.write('<script src="{{ URL::asset('etsb/ppc/js/jquery-2.1.0.min.js') }}"><\/script>')
</script>
<script type="text/javascript" src="{{ URL::asset('etsb/ppc/js/bootstrap.min.js') }}"></script>
<!--Packed with many functionalies such as carousel slider, responsivity, tabs, drop downs, buttons, and many other features-->
<script type="text/javascript" src="{{ URL::asset('etsb/ppc/js/modernizr.min.js') }}"></script>
<!--Modernizr is an open-source JavaScript library that helps you build the next generation of HTML5 and CSS3-powered websites.-->
<script type="text/javascript" src="{{ URL::asset('etsb/ppc/js/jquery.prettyPhoto.js') }}"></script>
<!-- Script for Lightbox Image  -->
<script type="text/javascript" src="{{ URL::asset('etsb/ppc/js/custom.js') }}"></script>
<!-- Script File containing all customizations  -->
<!-- End Js Files  -->


</body>

</html>