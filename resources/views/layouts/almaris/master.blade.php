<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Vinchee Suites</title>
    <link rel="icon" href="almaris/images/icon-white-36x36.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Vinchee Suites" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="almaris/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="almaris/css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="almaris/css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="almaris/css/style.css" rel="stylesheet" type="text/css" >
    <link href="almaris/css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="almaris/css/colors/scheme-01.css" rel="stylesheet" type="text/css" >

</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        @include('layouts.almaris.header')
        @yield('content')
        @include('layouts.almaris.footer')
        
        
        
    </div>


    
    <!-- Javascript Files
    ================================================== -->
    <script src="almaris/js/plugins.js"></script>
    <script src="almaris/js/designesia.js"></script>
    <script src="almaris/js/swiper.js"></script>
    <script src="almaris/js/custom-marquee.js"></script>
    <script src="almaris/js/custom-swiper-3.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="almaris/contact.js"></script>

</body>

</html>