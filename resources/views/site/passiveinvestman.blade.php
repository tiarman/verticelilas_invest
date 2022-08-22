@extends('layouts.site')

@section('stylesheet')
@endsection

@section('content')

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Invest</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('assets/newfrontend/img/hero-img.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- Latest news section -->
   @include('layouts.accordianlayout')
    <!-- Latest news section end -->
    <!-- End Hero -->

{{--    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">--}}
{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img src="{{asset('assets/newfrontend/img/passive.png')}}" class="d-block w-100" alt="...">--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="our_services_align1">--}}
{{--        <h1 class="container">PASSIVE INVESTMAN</h1>--}}
{{--    </div>--}}


    <!-- ======= Why Us Section ======= -->
    <section id="hero2" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div style="text-align: justify" class="content">
                        <p>
                            A real estate syndication is where a number of investors pool together their capital to jointly
                            purchase a specific real estate project to receive a fixed preferred return as well as a
                            predetermined percentage of net profits on the finished project. The investment is made through
                            a SPV (single purpose Spanish SL vehicle) that owns the project 100%. Most syndications
                            specialize in projects that are low risk but will provide a high return on capital for the syndication
                            investors.
                        </p>
                        <br/>
                        <p>The SPV structure is composed of two key elements, the general partner and the passive investor pool.</p>
                    </div>



                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img animated" style='background-image: url("{{asset('assets/newfrontend/img/why-us.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->
    <br/>
    <br/>
    <!-- ======= Skills Section ======= -->
    <section id="hero3" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{asset('assets/newfrontend/img/skills.png')}}" class="img-fluid animated" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <p style="text-align: justify" class="fst-italic">The General Partner responsibility is in finding projects that appears to have a strong profit
                        potential with low risk. Once a project is identified the general partner will complete a thorough
                        due diligence on the properties potential which includes preliminary planning, licensing, sales
                        demand, building costs, third party valuation and building a business plan.
                        The general partner will also enter negotiations with the seller to get the best price, terms and
                        condition for the pending project.</p>
                    <br/>
                       <p> Upon completion of the due diligence the General partner will
                        then commit their own funds and or arrange funding for the purchase of the property.
                        After the purchase the general partners role is to execute the business plan and deliver strong
                        returns to the passive investors in the real estate syndication.</p>



                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->
    <br/>
    <br/>
    <!-- ======= Why Us Section ======= -->
    <section id="hero2" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div style="text-align: justify" class="content">
                        <p>
                            The Passive Real Estate Investor´s role in the real estate syndication is to provide a portion of the
                            capital stack which is needed to finance the project. In exchange, passive investors receive
                            participation in the SPV which owns the project a fixed preferred return as well as a
                            predetermined percentage of net profits. With the Spanish legal structure the S.L. will be non
                            listed as this allows a more flexible system since there are no mandatory statutory rules making
                            specific regulations in the bylaws obligatory.
                        </p>
                        <br/>
                        <p>Nevertheless, the company is obliged to declare a dividend whenever distributable profits exist, unless otherwise provided for in its bylaws.</p>
                    </div>



                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img animated" style='background-image: url("{{asset('assets/newfrontend/img/why-us.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->
    <br/>
    <!-- ======= Skills Section ======= -->
    <section id="hero3" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{asset('assets/newfrontend/img/skills.png')}}" class="img-fluid animated" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <p style="text-align: justify" class="fst-italic">The Passive Real Estate Investor´s role in the real estate syndication is to provide a portion of the
                        capital stack which is needed to finance the project. In exchange, passive investors receive
                        participation in the SPV which owns the project a fixed preferred return as well as a
                        predetermined percentage of net profits. With the Spanish legal structure the S.L. will be non
                        listed as this allows a more flexible system since there are no mandatory statutory rules making
                        specific regulations in the bylaws obligatory. Nevertheless, the company is obliged to declare a
                        dividend whenever distributable profits exist, unless otherwise provided for in its bylaws.</p>
                    <br/>
                    <p> As with any investment, nothing is risk-free. When it comes to investing in syndications, the most
                        challenging decision a passive investor will make is who they choose to invest with. As an investor,
                        you must ensure that you are working with an experienced and trustworthy real estate
                        syndication. Another advantage of being a passive investor is that they can spread their capital
                        across multiple real estate projects.</p>



                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->
    <br>
    <br>
    <br>



@endsection
@section('script')
@endsection
