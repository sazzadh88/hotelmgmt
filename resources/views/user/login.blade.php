<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="template/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="template/css/style.css" rel='stylesheet' type='text/css' />
<link href="template/css/font-awesome.css" rel="stylesheet"> 
<script src="template/js/jquery.min.js"> </script>
<script src="template/js/bootstrap.min.js"> </script>
</head>
<body>
    <div class="login">
        <h1><a href="#">Company Name </a></h1>
        <div class="login-bottom">
            <h2>Login</h2>
            <form method="POST" action="">

                {{ csrf_field() }}


            <div class="col-md-12">
                <div class="login-mail">
                    <input type="text" placeholder="Email" required="" name="email" autocomplete="off">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="Password" name="password" required="" autocomplete="off">
                    <i class="fa fa-lock"></i>
                </div>
                
                   <button class="btn btn-primary">Login</button>
                
                   
                        @if($errors)
                            <br>
                            <br>
                            <span class="label label-danger">{{ $errors->first() }}</span>
                        @endif
                  

            
            </div>
            
            <div class="clearfix"> </div>
            </form>
        </div>
    </div>
        <!---->
<div class="copy-right">
            <p> &copy; 2017 Company Name. All Rights Reserved | Design by <a href="#" target="_blank">Global Tech Promoters</a> </p>     </div>  
<!---->
<!--scrolling js-->
    <script src="template/js/jquery.nicescroll.js"></script>
    <script src="template/js/scripts.js"></script>
    <!--//scrolling js-->
</body>
</html>

