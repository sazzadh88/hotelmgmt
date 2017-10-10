<header id="header">
            
            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        
                        <span><i class="hillter-icon-location"></i> 225 Beach Street, Australian</span>
                        <span><i class="hillter-icon-phone"></i> 1-548-854-8898</span>
                    </div>
                    <div class="header_right float-right">

                        <span class="login-register">
                            @if(Auth::guard('buser')->user())
                                <a href="#">{{ Auth::guard('buser')->user()->name }}</a>
                                <a href="#">Bookings</a>
                                <a href="{{ route('userlogout') }}">Logout</a>
                                
                            @else
                                <a href="{{ route('userlogin') }}">Login</a>
                                <a href="#">register</a>
                            @endif
                               
                               
                                

                        </span>

                        

                       

                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->
            
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li class="">
                                <a href="{{ route('site.index') }}">Home </a>   
                            </li>
                            <li class="">
                                <a href="{{ route('site.about') }}">About </a>   
                            </li>
                            <li class="">
                                <a href="{{ route('site.gallery') }}">Gallery </a>   
                            </li>
                            <li class="">
                                <a href="{{ route('site.rooms') }}">Booking </a>   
                            </li>
                            <li class="">
                                <a href="{{ route('site.contact') }}">Contact Us </a>   
                            </li>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>