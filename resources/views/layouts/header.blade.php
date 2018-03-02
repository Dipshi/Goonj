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
    {{--  <link href="{{URL::to('css/style1.css') }}" rel="stylesheet">  --}}

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
