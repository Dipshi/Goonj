<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{URL::to('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{URL::to('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{URL::to('css/price-range.css') }}" rel="stylesheet">
    <link href="{{URL::to('css/animate.css') }}" rel="stylesheet">
	<link href="{{URL::to('css/main1.css') }}" rel="stylesheet">
<<<<<<< HEAD
	<link href="{{URL::to('css/responsive.css') }}" rel="stylesheet">
    <script src="{{URL::to('js/jquery.js') }}"></script>
    <script src="{{URL::to('js/bootstrap.min.js') }}"></script>
    <script src="{{URL::to('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{URL::to('js/price-range.js') }}"></script>
    <script src="{{URL::to('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{URL::to('js/main.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    {{--  <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('images/ico/apple-touch-icon-57-precomposed.png') }}">  --}}
</head><!--/head-->
<body>
    {{--  @yield('body')  --}}
    <header id="header"><!--header-->
    {{--  <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->  --}}
    
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url ('eshopper/') }}"><img src="images/home/logo1.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="{{url ('eshopper/checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="{{url ('eshopper/cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="{{url ('eshopper/login') }}"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url ('eshopper/') }}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url ('eshopper/shop') }}">Products</a></li>
                                    <li><a href="{{url ('eshopper/product-details') }}">Product Details</a></li> 
                                    <li><a href="{{url ('eshopper/checkout') }}">Checkout</a></li> 
                                    <li><a href="{{url ('eshopper/cart') }}">Cart</a></li> 
                                     
                                </ul>
                            </li> 
                            {{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>  --}}
                            {{-- <li><a href="404.html">404</a></li> --}}
                            <li><a href="{{url ('eshopper/contact-us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
{{-- main body --}}
@yield('body')
{{-- Footer --}}
<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span></p>
            </div>
        </div>
    </div>
    
</footer><!--/Footer-->



</body>
</html>
=======
    <link href="{{URL::to('css/responsive.css') }}" rel="stylesheet">
    <link href="{{URL::to('css/style1.css') }}" rel="stylesheet">
    <link href="{{URL::to('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{URL::to('css/owl.theme.css') }}" rel="stylesheet">

    <link href="{{URL::to('css/owl.transition.css') }}" rel="stylesheet">



  </head><!--/head-->
<body>
    @yield('nav')
</body>
</html>
<script src="{{URL::to('js/jquery.js') }}"></script>
<script src="{{URL::to('js/bootstrap.min.js') }}"></script>
<script src="{{URL::to('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{URL::to('js/price-range.js') }}"></script>
<script src="{{URL::to('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{URL::to('js/main.js') }}"></script>
<script src="{{URL::to('js/main1.js') }}"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="{{URL::to('js/jquery.cookie.js') }}"></script>
<script src="{{URL::to('js/waypoints.min.js') }}"></script>
<script src="{{URL::to('js/modernizr.js') }}"></script>
<script src="{{URL::to('js/bootstrap-hover-dropdown.js') }}"></script>
<script src="{{URL::to('js/owl.carousel.min.js') }}"></script>
<script src="{{URL::to('js/front.js') }}"></script>
>>>>>>> master
