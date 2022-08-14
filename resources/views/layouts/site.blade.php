<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arsha Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/frontend/images/favicon.png')}}" rel="icon">
    <link href="{{('assets/frontend/images/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/newfrontend/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/newfrontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/newfrontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/newfrontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/newfrontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/newfrontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/newfrontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/newfrontend/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/custom2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/custom.css') }}"/>

    @yield('stylesheet')

    <!-- =======================================================
    * Template Name: Arsha - v4.3.0
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>


<body>

<!-- LOAD PAGE -->
<div class="animationload">
  <div class="loader"></div>
</div>



<!-- HEADER -->
<header id="header" class="fixed-top " >
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{route('home')}}">Arsha</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="#"><span>ABOUT</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
{{--                <li><a class="nav-link scrollto active" href="#hero">ABOUT</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#about">About</a></li>--}}
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link   scrollto" href="#portfolio">PROJECTS</a></li>
                <li><a class="nav-link scrollto" href="#team">ARTICLES</a></li>
{{--                <li><a class="nav-link scrollto" href="#team">CONTACTS</a></li>--}}

                <li><a class="nav-link scrollto" href="#contact">CONTACTS</a></li>
                <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

@yield('content')
<!-- FOOTER SECTION -->
<!-- Contact-->







<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/frontend/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>

@yield('script')

</body>
</html>
