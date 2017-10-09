<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ asset('template/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{ asset('template/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('template/css/font-awesome.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<script src="{{ asset('template/js/jquery.min.js') }}"> </script>
<!-- Mainly scripts -->
<script src="{{ asset('template/js/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('template/js/jquery.slimscroll.min.js') }}"></script>
<!-- Custom and plugin javascript -->
<link href="{{ asset('template/css/custom.css') }}" rel="stylesheet">
<script src="{{ asset('template/js/custom.js') }}"></script>
<script src="{{ asset('template/js/screenfull.js') }}"></script>

        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }

            

            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
            

            
        });
        </script>



<script src="{{ asset('template/js/pie-chart.js') }}" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!--skycons-icons-->
<script src="{{ asset('template/js/skycons.js') }}"></script>
<!--//skycons-icons-->
</head>
<body>
        <div id="wrapper">

            <nav class="navbar-default navbar-static-top" role="navigation">
                 <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <h1> <a class="navbar-brand" href="{{ route('adminhome') }}">Admin Panel</a></h1>         
                   </div>
                 <div class=" border-bottom">
                <div class="full-left">
                  <section class="full-top">
                    <button id="toggle"><i class="fa fa-arrows-alt"></i></button>   
                </section>
                <form class=" navbar-left-right">
                  <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
                  <input type="submit" value="" class="fa fa-search">
                </form>
                <div class="clearfix"> </div>
               </div>
         
           
                <!-- Brand and toggle get grouped for better mobile display -->
             
               <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="drop-men" >
                    <ul class=" nav_1">
                       
                       
                        <li class="dropdown">
                          <a href="template/#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{ Auth::user()->name}}<i class="caret"></i></span><img src="{{ asset('template/images/wo.jpg') }}"></a>
                          <ul class="dropdown-menu " role="menu">
                            <li><a href="template/profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                            <li><a href="template/inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                            <li><a href="template/calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                            <li><a href="template/inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
                          </ul>
                        </li>
                       
                    </ul>
                 </div><!-- /.navbar-collapse -->
                <div class="clearfix">
           
         </div>
          @include('layouts.sidenav')
        </nav>

    @yield('panel')


     
        <!---->
<div class="copy">
            <p> &copy; 2016 Company Name. All Rights Reserved | Design by <a href="http://www.globaltechpromoters.com/" target="_blank">Global Tech Promoters</a> </p>
        </div>
        </div>
        <div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
    <script src="{{ asset('template/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <!--//scrolling js-->
    <script src="{{ asset('template/js/bootstrap.min.js') }}"> </script>

    <script>
        $('#logout').click(function(){
            
            $('#logout-form').submit();
        
        });
    </script>

    @include('layouts.dt');
</body>
</html>

