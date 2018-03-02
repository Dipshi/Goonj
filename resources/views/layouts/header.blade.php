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
	<link href="{{URL::to('css/responsive.css') }}" rel="stylesheet">
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
    @yield('nav')
</body>
</html>
<script src="{{URL::to('js/jquery.js') }}"></script>
<script src="{{URL::to('js/bootstrap.min.js') }}"></script>
<script src="{{URL::to('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{URL::to('js/price-range.js') }}"></script>
<script src="{{URL::to('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{URL::to('js/main.js') }}"></script>
