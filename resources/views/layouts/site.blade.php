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
    <link href="{{asset('assets/contacts/css/fontawesome.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/contacts/css/style.css')}}">
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
{{--<div class="animationload">--}}
{{--    <div class="loader"></div>--}}
{{--</div>--}}



<!-- HEADER -->
<header id="header" class="fixed-top " >
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{route('home')}}">Verticelilas</a></h1>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="#"><span>ABOUT</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>

                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('whyus')}}">Why Us</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{route('investors')}}">PASSIVE INVESTMAN</a></li>
                <li><a class="nav-link scrollto" href="{{route('services')}}">SERVICES</a></li>
                <li class="dropdown"><a href="#"><span>PROJECTS</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('lacreasta')}}">LA CRESTA DEL MAR</a></li>
                        {{--                        <li><a href="{{route('giaproject')}}">GAIA PROJECT</a></li>--}}
                        {{--                        <li><a href="{{route('project.nox.residential')}}">NOX Residential</a></li>--}}

                        {{--                        <li><a href="{{route('armonia')}}">ARMONIA Project</a></li>--}}


                        {{--                        <li><a href="{{route('alexandra')}}">Alexandra Villas</a></li>--}}
                        <li><a href="{{route('kitiou')}}">Vilas Á Beira-mar</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="{{route('articles')}}"><span>ARTICLES</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('articles')}}">View All Articles</a></li>
                        <li><a href="{{route('cyprus')}}">Cyprus Investment 2022</a></li>

                    </ul>
                </li>


                <li><a class="nav-link scrollto" href="{{route('contact')}}">CONTACTS</a></li>
                {{--                <li><a class="getstarted scrollto" href="#about">Get Started</a></li>--}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

@yield('content')
<!-- FOOTER SECTION -->
<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft; color: white">
                        <h3 class="f-title f_600 t_color f_size_18">VERTICELILAS</h3>
                        <p style="margin-top: -14px; font-size: 13px">Home</p>
                        <p style="margin-top: -14px; font-size: 13px">About</p>
                        <p style="margin-top: -14px; font-size: 13px">Why Us</p>
                        <p style="margin-top: -14px; font-size: 13px">Our Services</p>
                        <p style="margin-top: -14px; font-size: 13px">Our Projects</p>
                        <p style="margin-top: -14px; font-size: 13px">Articles</p>
                        <p style="margin-top: -14px; font-size: 13px">Contact Us</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft; color: white">
                        <h3 class="f-title f_600 t_color f_size_18">Our Projects</h3>
                        <ul style="font-size: 13px" class="list-unstyled f_list">
                            <li><a href="#">All Projects</a></li>
                            <li><a href="#">LA CRESTA DEL MAR</a></li>
                            {{--                            <li><a href="#">GAIA Project</a></li>--}}
                            {{--                            <li><a href="#">NOX Project</a></li>--}}
                            {{--                            <li><a href="#">ARMONIA Project</a></li>--}}
                            {{--                            <li><a href="#">ALEXANDRA Project</a></li>--}}
                            <li><a href="#">Vilas Á Beira-mar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft; color: white">
                        <h3 class="f-title f_600 t_color f_size_18">CONTACT US</h3>
                        <ul style="font-size: 13px" class="list-unstyled f_list">
                            <li><a href="#">VERTICELILAS</a></li>
                            <li><a href="#">Calle Gutenberg</a></li>
                            <li><a href="#">5 4BIS 29016 Malaga Spain</a></li>
                            <li><a href="#">Tel: 34-646441927</a></li>
                            <li><a href="#">info@verticelilasinvest.com</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft; color: white">
                        <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                        <div>
                            <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="Twitter"><i class="fab fa-facebook"></i></a>
                            <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="Twitter"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-1" href="#!" aria-label="Twitter"><i class="fab fa-youtube"></i></a>
                            {{--                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-linkedin"></i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">© 2022 Verticelilas All Rights Reserved. | Privacy Policy</p>
                </div>
                <div class="col-lg-6 col-sm-5 text-right">
                    {{--                    <p>Maintains By <i class="fab fa-heart"></i> in <a href="https://optimistic-ardinghelli-768ff3.netlify.app/" target="_blank">Towhidul Islam</a></p>--}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Contact-->







<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
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
