<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Rooms</title>

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
 <!--    <div id="preloader">
        <span class="preloader-dot"></span>
    </div> -->
    <!-- END / PRELOADER -->


    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        @include('layouts.header')
        <!-- END / HEADER -->

        <!-- SUB BANNER -->
        <section class="section-sub-banner awe-parallax bg-20">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>ROOMS &amp; RATES</h2>
                        <!-- <p>Lorem Ipsum is simply dummy text</p> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->

        <!-- ROOM -->
        <section class="section-room bg-white">
            <div class="container">

                <div class="room-wrap-5">
                    <div class="row">
                        
                        @foreach($availableroomids as $roomid)
	                        <!-- ITEM -->
	                        <div class="col-xs-6">
	                            <div class="room_item-5" data-background='images/room/grid2/img-1.jpg'>

	                                <div class="img">
	                                    <a href="#"><img src="images/room/grid2/img-1.jpg" alt=""></a>
	                                </div>

	                                <div class="room_item-forward">
	                                    <h2><a href="#">{{ App\Room::find($roomid)->tarrif->name }}</a></h2>
	                                    <span class="price">Start form {{ App\Room::find($roomid)->tarrif->price }} per day</span>
	                                </div>

	                                <div class="room_item-back">
	                                    <h3>{{ App\Room::find($roomid)->tarrif->name }}</h3>
	                                    
	                                    <a href="roombook/{{$roomid}}" class="awe-btn awe-btn-13">Book</a>
	                                </div>

	                            </div>
	                        </div>
	                        <!-- END / ITEM -->
						@endforeach
                        

                       

                    </div>
                </div>
                
            </div>
        </section>
        <!-- END / ROOM -->
        
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
                                        <p><i class="fa fa-envelope-o"></i> <a href="http://envato.megadrupal.com/cdn-cgi/l/email-protection#f9919095958d9c8b91968d9c95b99e94989095d79a9694"><span class="__cf_email__" data-cfemail="b7dfdedbdbc3d2c5dfd8c3d2dbf7d0dad6dedb99d4d8da">[email&#160;protected]</span></a></p>
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


</html>