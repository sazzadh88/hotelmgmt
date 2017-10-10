

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Reservation Details</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/lib/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/lib/font-hilltericon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/lib/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/lib/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/lib/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/lib/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/lib/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/lib/bootstrap-select.min.css')}}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/style.css')}}">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


    <!-- PRELOADER -->
<!--     <div id="preloader">
        <span class="preloader-dot"></span>
    </div> -->
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
       @include('layouts.header')
        <!-- END / HEADER -->
        
        <!-- SUB BANNER -->
        <section class="section-sub-banner awe-parallax bg-16">

            <div class="awe-overlay"></div>

            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>RESERVATION</h2>
                        
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
        
        <!-- RESERVATION -->
        <section class="section-reservation-page bg-white">

            <div class="container">
                <div class="reservation-page">
                    
                    <!-- STEP -->
                    <div class="reservation_step">
                        <ul>
                            <li><a href="#"><span>1.</span>  Choose Date</a></li>
                            <li><a href="#"><span>2.</span> Choose Room</a></li>
                            <li class="active"><a href="#"><span>3.</span> Make a Reservation</a></li>
                            <li><a href="#"><span>4.</span> Confirmation</a></li>
                        </ul>
                    </div>
                    <!-- END / STEP -->

                    <div class="row">

                        <!-- SIDEBAR -->
                        <div class="col-md-4 col-lg-3">

                            <div class="reservation-sidebar">

                                <!-- RESERVATION DATE -->
                                <div class="reservation-date bg-gray">

                                    <!-- HEADING -->
                                    <h2 class="reservation-heading">Dates</h2>
                                    <!-- END / HEADING -->

                                    <ul>
                                        <li>
                                            <span>Check-In</span>
                                            <span>{{ Session::get('arrive') }}</span>
                                        </li>
                                        <li>
                                            <span>Check-Out</span>
                                            <span>{{ Session::get('departure') }}</span>
                                        </li>
                                        <li>
                                            <span>Total Nights</span>
                                            <span>{{ Session::get('duration') }}</span>
                                        </li>
                                        <li>
                                            <span>Total Rooms</span>
                                            <span>2 of 2</span>
                                        </li>
                                        <li>
                                            <span>Total Guests</span>
                                            <span>{{ Session::get('adults') }} Adult(s) &amp; {{ Session::get('children') }} Children</span>
                                        </li>
                                    </ul>

                                </div>
                                <!-- END / RESERVATION DATE -->
                                
                                <!-- ROOM SELECT -->
                                <div class="reservation-room-selected bg-gray">

                                    <!-- HEADING -->
                                    <h2 class="reservation-heading">Select Rooms</h2>
                                    <!-- END / HEADING -->

                                    <!-- ITEM -->
                                    <div class="reservation-room-seleted_item">

                                        <h6>ROOM 1</h6> <span class="reservation-option">2 Adult, 1 Child</span>

                                        <div class="reservation-room-seleted_name has-package">
                                            <h2><a href="#">{{ App\Room::find($roomid)->tarrif->name }}</a></h2>
                                        </div>

                                        <div class="reservation-room-seleted_package">
                                            <h6>Space Price</h6>
                                            <ul>
                                                <li>
                                                    <span>{{ App\Room::find($roomid)->tarrif->price }}</span>
                                                </li>
                                            </ul>

                                            <ul>
                                                <li>
                                                    <span>Service</span>
                                                    <span>Free</span>
                                                </li>
                                                
                                            </ul>

                                        </div>

                                        <div class="reservation-room-seleted_total-room">
                                            TOTAL Room 1
                                            <span class="reservation-amout">$470.00</span>
                                        </div>
                                        
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="reservation-room-seleted_item">
                                        <h6>ROOM 2</h6> <span class="reservation-option">2 Adult, 1 Child</span>
                                        <div class="reservation-room-seleted_name has-package">
                                            <h2><a href="#">LUXURY ROOM</a></h2>
                                        </div>

                                        <div class="reservation-room-seleted_package">
                                            <h6>Space Price</h6>
                                            <ul>
                                                <li>
                                                    <span>3 June 2015</span>
                                                    <span>$250.00</span>
                                                </li>
                                                <li>
                                                    <span>6 June 2015</span>
                                                    <span>$320.00</span>
                                                </li>
                                            </ul>

                                            <ul>
                                                <li>
                                                    <span>Service</span>
                                                    <span>Free</span>
                                                </li>
                                                <li>
                                                    <span>Tax</span>
                                                    <span>$320.00</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="reservation-room-seleted_total-room">
                                            TOTAL Room 2
                                            <span class="reservation-amout">$470.00</span>
                                        </div>
                                        
                                    </div>
                                    <!-- END / ITEM -->
                                    
                                    <!-- TOTAL -->
                                    <div class="reservation-room-seleted_total bg-blue">
                                        <label>TOTAL</label>
                                        <span class="reservation-total">$470.00</span>
                                    </div>
                                    <!-- END / TOTAL -->

                                </div>
                                <!-- END / ROOM SELECT -->
                                
                            </div>

                        </div>
                        <!-- END / SIDEBAR -->
                        
                        <!-- CONTENT -->
                        <div class="col-md-8 col-lg-9">

                            <div class="reservation_content">
                                
                                <div class="reservation-billing-detail">

                                    <p class="reservation-login">Returning customer? <a href="#">Click here to login</a></p>

                                    <h4>BILLING DETAILS</h4>

                                    

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label> Name<sup>*</sup></label>
                                            <input value="{{ Auth::guard('buser')->user()->name }}" type="text" class="input-text">
                                        </div>
                                        
                                    </div>

                                    <label>Mobile</label>
                                    <input type="text" value="{{ Auth::guard('buser')->user()->mobile }} " class="input-text">

                                    <label>Address<sup>*</sup></label>
                                    <input type="text" class="input-text" placeholder="Street Address">
                                    <br><br>
                                    <input type="text" class="input-text" placeholder="Apartment, suite, unit etc. (Optional)">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Town / City<sup>*</sup></label>
                                            <input type="text" class="input-text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Country<sup>*</sup></label>
                                            <input type="text" class="input-text">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Email Address<sup>*</sup></label>
                                            <input type="text" class="input-text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone<sup>*</sup></label>
                                            <input type="text" class="input-text">
                                        </div>
                                    </div>

                                    <label>Order Notes</label>
                                    <textarea type="text" class="input-textarea" placeholder="Notes about your order, eg. special notes for delivery"></textarea>

                                    <label class="label-radio">
                                        <input type="radio" class="input-radio">
                                        Create an account?
                                    </label>

                                    <p class="reservation-code">
                                        You have a coupon? <a href="#">Click here to enter your code</a>
                                    </p>

                                    <ul class="option-bank">
                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Direct Bank Transfer
                                            </label>
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </li>

                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Cheque Payment
                                            </label>
                                        </li>

                                        <li>
                                            <label class="label-radio">
                                                <input type="radio" class="input-radio" name="chose-bank">
                                                Credit Card
                                            </label>

                                            <img src="{{ asset('/frontend/images/icon-card.jpg') }}" alt="">
                                        </li>

                                    </ul>
                                    <button class="awe-btn awe-btn-13">PLACE ORDER</button>
                                </div>

                            </div>

                        </div>
                        <!-- END / CONTENT -->
                        
                    </div>
                </div>
            </div>

        </section>
        <!-- END / RESERVATION -->
        
        <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER TOP -->
            <div class="footer_top">
                <div class="container">
                    <div class="row">

                        <!-- WIDGET MAILCHIMP -->
                        <div class="col-lg-8">
                            <div class="mailchimp">
                                <h4>News &amp; Offers</h4>
                                <div class="mailchimp-form">
                                    <form action="#" method="POST">
                                        <input type="text" name="email" placeholder="Your email address" class="input-text">
                                        <button class="awe-btn">SIGN UP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET MAILCHIMP -->
                        
                        <!-- WIDGET SOCIAL -->
                        <div class="col-lg-3 col-lg-offset-1">
                            <div class="social">
                                <div class="social-content">
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#"><img src="images/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="hillter-icon-location"></i> 225 Beach Street, Australian</p>
                                        <p><i class="hillter-icon-phone"></i> 1-548-854-8898</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="http://envato.megadrupal.com/cdn-cgi/l/email-protection#157d7c79796170677d7a617079557278747c793b767a78"><span class="__cf_email__" data-cfemail="630b0a0f0f1706110b0c17060f23040e020a0f4d000c0e">[email&#160;protected]</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Page site</h4>
                                <ul>
                                    <li><a href="#">Guest Book</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Event</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">ABOUT</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Comming Soon</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-3">
                            <div class="widget widget_tripadvisor">
                                <h4 class="widget-title">Tripadvisor</h4>
                                <div class="tripadvisor">
                                    <p>Now with hotel reviews by</p>
                                    <img src="images/tripadvisor.png" alt="">
                                    <span class="tripadvisor-circle">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i class="part"></i>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2015 Hillter Hotel All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script style="display: none !important;">!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script>
      <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/bootstrap-select.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery.appear.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery.countTo.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/lib/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/js/scripts.js')}}"></script>

</body>