<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Software Developer Hugo Chen's Portfolio">
    <link rel="icon" href="{!! Theme::url('custom/favicon/favicon.png') !!}" sizes="16x16">

    <meta name="apple-mobile-web-app-capable" content="yes">
    
    <title>Hugo Chen Portfolio</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{
        Theme::url('bootstrap/css/bootstrap.min.css')
        .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('bootstrap/css/bootstrap.min.css'))}}"/>
    <link rel="stylesheet" type="text/css" href="{{
        Theme::url('fontawesome/css/all.min.css')
        .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('fontawesome/css/all.min.css'))}}"/>
    <link rel="stylesheet" type="text/css" href="{{
        Theme::url('magnific/magnific-popup.css')
        .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('magnific/magnific-popup.css'))}}"/>
    <link rel="stylesheet" type="text/css" href="{{
        Theme::url('custom/css/custom_app.css')
        .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('custom/css/custom_app.css'))}}"/>


    @yield('styles')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body id="page-top">

    @yield('content')

    <!-- JavaScripts -->
    <script src="{{Theme::url('jquery/jquery.min.js')
    .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('jquery/jquery.min.js'))}}"></script>
    <script src="{{Theme::url('bootstrap/js/bootstrap.min.js')
    .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('bootstrap/js/bootstrap.min.js'))}}"></script>

    <script src="{{Theme::url('jquery-easing/jquery.easing.min.js')
    .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('jquery-easing/jquery.easing.min.js'))}}"></script>
    <script src="{{Theme::url('magnific/jquery.magnific-popup.min.js')
    .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('magnific/magnific-popup.min.js'))}}"></script>

    <script src="{{Theme::url('custom/js/custom_app.js')
    .'?'.filemtime($_SERVER['DOCUMENT_ROOT'].Theme::url('custom/js/custom_app.js'))}}"></script>

    @yield('scripts')
</body>
</html>