@extends('layouts.site')

@section('stylesheet')

@endsection

@section('content')



    <!-- ======= Hero Section ======= -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img height="650px" src="{{asset('assets/newfrontend/img/lacre/15.jpg')}}" class="d-block w-100" alt="...">
{{--                <img src="{{asset('assets/frontend/images/home03.png')}}" class="d-block w-100" alt="...">--}}
                <div class="carousel-caption d-none d-md-block">
                    <h1>LA CRESTA DEL MAR</h1>
                    <p style="font-size: 30px; font-weight: 600">SEVEN NEW INDIVIDUAL VILLAS WITH PRIVATE POOLS</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('assets/frontend/images/home02.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/frontend/images/home03.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>





{{--    <section id="hero" class="d-flex align-items-center">--}}

{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <h1>Better Solutions For Your Business</h1>--}}
{{--                    <h2>We are team of talented designers making websites with Bootstrap</h2>--}}
{{--                    <div class="d-flex justify-content-center justify-content-lg-start">--}}
{{--                        <a href="#about" class="btn-get-started scrollto">Get Started</a>--}}
{{--                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">--}}
{{--                    <img src="{{asset('assets/frontend/images/hero-img.png')}}" class="img-fluid animated" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </section><!-- End Hero -->--}}
  <!-- BANNER -->


  <!-- TEXT SECTION -->
  <div class="section">
    <div class="content-wrap py-0">
      <div class="container text-section-align">
       <h1>Who we are</h1>
          <div class="text-section-align2">
              <p style="text-align: justify">As a professionally owned private real estate company, Verticelilas has always endeavored to  design and build  high quality, livable homes that are located close to the sea in highly desirable but lessor know areas all along  the Spanish and Portuguese coastlines.  We purposely shun the high density, high costs areas famous for mass-produced houses and Villas.</p>
          </div>

{{--          <div class="text-section-align2">--}}
{{--              <p>Sunshadow prides itself on being able to deliver high-quality projects. And we do not subscribe to the philosophy of mass-produced apartments and row upon row of look-alike houses.</p>--}}
{{--          </div>--}}
          <div class="text-section-button">
              <a href="{{route('about')}}" type="button" class="btn btn-primary">About Us</a>
          </div>
      </div>
    </div>
  </div>

  <!-- IMAGE SECTION -->
{{--  <section class="container">--}}
{{--      <div class="row">--}}
{{--          <div class="col-md-3">--}}
{{--              <img width="300px" src="{{asset(('assets/newfrontend/img/img1.jpg'))}}" alt="">--}}
{{--          </div>--}}
{{--          <div class="col-md-3">--}}
{{--              <img width="300px" src="{{asset(('assets/newfrontend/img/img2.jpg'))}}" alt="">--}}
{{--          </div>--}}
{{--          <div class="col-md-3">--}}
{{--              <img width="300px" src="{{asset(('assets/newfrontend/img/img2.jpg'))}}" alt="">--}}
{{--          </div>--}}
{{--          <div class="col-md-3">--}}
{{--              <img width="300px" src="{{asset(('assets/newfrontend/img/img2.jpg'))}}" alt="">--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </section>--}}




    <section class="container">
        <div class="row gy-3">
            <div class="col-md-3 col-sm-6">
                <a href="{{route('lacreasta')}}"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/1.jpg')}}" alt=""></div></a>
                <h5 style="margin-top: 8px">LA CRESTA</h5>
               <p style="font-size: 13px">Seven New Individual Villas With Private Pools</p>

            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/14.jpg')}}"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/14.jpg')}}" alt=""></div></a>
                <h5 style="margin-top: 8px">VERTICELILAS Project</h5>
                <p style="font-size: 13px">2-3 Bedroom Apartments</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/3.jpg')}}"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/3.jpg')}}" alt=""></div></a>

            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/4.jpg')}}"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/4.jpg')}}" alt=""></div></a>

            </div>



            {{--            <div class="col-md-3 col-sm-6">--}}
            {{--                <a href="{{asset('assets/newfrontend/img/lacre/15.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/15.jpg')}}" alt=""></div></a>--}}
            {{--            </div>--}}

        </div>
    </section>
{{--    <section class="container">--}}
{{--        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 g-4 image-section-align">--}}
{{--            <div class="col">--}}
{{--                <div class="card h-100">--}}
{{--                    <a href="{{route('giaproject')}}"><img src="{{asset(('assets/newfrontend/img/img1.jpg'))}}" class="card-img-top" alt="..."></a>--}}
{{--                    <div>--}}
{{--                        <h1>LA CRESTA</h1>--}}
{{--                        <p>SEVEN NEW INDIVIDUAL VILLAS WITH PRIVATE POOLS</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card h-100">--}}
{{--                    <img src="{{asset(('assets/newfrontend/img/img1.jpg'))}}" class="card-img-top" alt="...">--}}
{{--                    <div>--}}
{{--                        <h1>NOX Residences</h1>--}}
{{--                        <p>2-3 Bedroom Apartments</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card h-100">--}}
{{--                    <img src="{{asset(('assets/newfrontend/img/img1.jpg'))}}" class="card-img-top" alt="...">--}}
{{--                    <div>--}}
{{--                        <h1>ARMONIA Project</h1>--}}
{{--                        <p>Sold Out</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card h-100">--}}
{{--                    <img src="{{asset(('assets/newfrontend/img/img1.jpg'))}}" class="card-img-top" alt="...">--}}
{{--                    <div>--}}
{{--                        <h1>KITIOU Residences</h1>--}}
{{--                        <p>Sold Out</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-md-8 text-center text-lg-start">
                    <iframe width="700" height="405" src="https://www.youtube.com/embed/iSN68Snk690">
                    </iframe>

                </div>
                <div style="margin-top: 40px" class="col-md-4 text-center verticle-align-center">
                    <h3>INVEST IN LACRESTA</h3>
                    <br/>
                    <br/>
                    <br/>
                    <p>Watch how we operate and build in Lacresta, the stunning seaside city, your next destination for your next investment.</p>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

  <!-- Real State Investman -->
    <section class="container">
        <h1 style="text-align: center; font-size: 24px; margin-bottom: 70px">REAL ESTATE INVESTMENT IN LARNACA, CYPRUS</h1>
        <div class="row gy-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <img width="60px" src="{{asset('assets/newfrontend/img/apartment.png')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10 real_state_investman_align">
                        <h1 class="card-title">Years of Experience in Property Development</h1>
                        <p class="card-text">With years of experience in property development investment, marketing, renovating, property management and residential sales, we are a company that is committed to each client’s best interests.</p>
                    </div>
                </div>


            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <img width="60px" src="{{asset('assets/newfrontend/img/realmap.png')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10 real_state_investman_align">
                        <h1 class="card-title">Strategic Locations for Investment and Lifestyle</h1>
                        <p class="card-text">When choosing locations to build, we carefully select areas with highest potential in market growth, close proximity to the essential amenities, and with the most pleasant view and atmosphere.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <img width="60px" src="{{asset('assets/newfrontend/img/house-1.png')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10 real_state_investman_align">
                        <h1 class="card-title">Truly Liveable and Enjoyable Residences</h1>
                        <p class="card-text">The 2 and 3 bedroom apartments have been carefully designed to maximise the available space. They are both inspired and sensible. They offer open, spacious living areas with full height and full width thermal glazed windows, expansive balconies, extensive storage in the bedrooms and kitchen and quality floor ceramics in all areas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <img width="60px" src="{{asset('assets/newfrontend/img/painting.png')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10 real_state_investman_align">
                        <h1 class="card-title">Aesthetic Designs Infused with Build Quality</h1>
                        <p class="card-text">Attractive developments which are both economically viable and aesthetically pleasing. Developments which are consistently innovative and environmentally responsible in their design, construction and sustainability. Management and construction in line with European industry standards and quality assurance principles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- <section class="container">--}}
{{--     <h1 class="text-center">REAL ESTATE INVESTMENT <br/> IN LARNACA, CYPRUS</h1>--}}
{{--     <div class="row">--}}
{{--         <div class="col-md-6">--}}
{{--             <div class="card mb-3" style="max-width: 540px;">--}}
{{--                 <div class="row g-0">--}}
{{--                     <div class="col-md-2 real_state_investman_align">--}}
{{--                         <img src="{{asset('assets/newfrontend/img/apartment.png')}}" class="img-fluid rounded-start" alt="...">--}}
{{--                     </div>--}}
{{--                     <div class="col-md-10">--}}
{{--                         <div class="card-body">--}}
{{--                             <h5 class="card-title">Years of Experience in Property Development</h5>--}}
{{--                             <p class="card-text">With years of experience in property development investment, marketing, renovating, property management and residential sales, we are a company that is committed to each client’s best interests.</p>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--         <div class="col-md-6">--}}
{{--             <div class="card mb-3" style="max-width: 540px;">--}}
{{--                 <div class="row g-0">--}}
{{--                     <div class="col-md-2">--}}
{{--                         <img src="..." class="img-fluid rounded-start" alt="...">--}}
{{--                     </div>--}}
{{--                     <div class="col-md-10">--}}
{{--                         <div class="card-body">--}}
{{--                             <h5 class="card-title">Strategic Locations for Investment and Lifestyle</h5>--}}
{{--                             <p class="card-text">When choosing locations to build, we carefully select areas with highest potential in market growth, close proximity to the essential amenities, and with the most pleasant view and atmosphere.</p>--}}

{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--         <div class="col-md-6">--}}
{{--             <div class="card mb-3" style="max-width: 540px;">--}}
{{--                 <div class="row g-0">--}}
{{--                     <div class="col-md-2">--}}
{{--                         <img src="..." class="img-fluid rounded-start" alt="...">--}}
{{--                     </div>--}}
{{--                     <div class="col-md-10">--}}
{{--                         <div class="card-body">--}}
{{--                             <h5 class="card-title">Truly Liveable and Enjoyable Residences</h5>--}}
{{--                             <p class="card-text">The 2 and 3 bedroom apartments have been carefully designed to maximise the available space. They are both inspired and sensible. They offer open, spacious living areas with full height and full width thermal glazed windows, expansive balconies, extensive storage in the bedrooms and kitchen and quality floor ceramics in all areas.</p>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--         <div class="col-md-6">--}}
{{--             <div class="card mb-3" style="max-width: 540px;">--}}
{{--                 <div class="row g-0">--}}
{{--                     <div class="col-md-2">--}}
{{--                         <img src="..." class="img-fluid rounded-start" alt="...">--}}
{{--                     </div>--}}
{{--                     <div class="col-md-10">--}}
{{--                         <div class="card-body">--}}
{{--                             <h5 class="card-title">Aesthetic Designs Infused with Build Quality</h5>--}}
{{--                             <p class="card-text">Attractive developments which are both economically viable and aesthetically pleasing. Developments which are consistently innovative and environmentally responsible in their design, construction and sustainability. Management and construction in line with European industry standards and quality assurance principles.</p>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--     </div>--}}
{{-- </section>--}}

  <!-- KNOWLEDGE BASE -->
    <section class="container">
        <h1 class="text-center">KNOWLEDGE BASE</h1>

        <div class="row g-4">
            <div class="col-md-3 col-sm-2">
                <div class="card h-100">
                    <img height="120px" src="{{asset('assets/newfrontend/img/card1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body knowledge_base_align">
                        <h1 class="card-title">2 Luxury Properties in Larnaca: GAIA & NOX</h1>
                        <br/>
                        <p class="card-text">When it comes to luxury properties in Larnaca, there are always four factors that you need to keep in mind when making a choice. The ...</p>
                    </div>
                    <div style="padding: 10px">
                        <button class="btn btn-success">READ MORE</button>
                    </div>

                </div>

            </div>
            <div class="col-md-3 col-sm-2">
                <div class="card h-100">
                    <img height="120px" src="{{asset('assets/newfrontend/img/card2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body knowledge_base_align">
                        <h1 class="card-title">15 Important Reasons Why to Invest in Larnaca Now in 2022</h1>
                        <br/>
                        <p class="card-text">Before we get into why to invest in Larnaca in 2021, let’s mention that Larnaca is one of the six cities on the south coast …</p>
                    </div>
                    <div style="padding: 10px">
                        <button class="btn btn-success">READ MORE</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-2">
                <div class="card h-100">
                    <img height="120px"  src="{{asset('assets/newfrontend/img/card3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body knowledge_base_align">
                        <h1 class="card-title">Larnaca Property Investment: Quick Overlook + 2 Projects</h1>
                        <br/>
                        <p class="card-text">Larnaca Property Investment Larnaca property investment is thriving; there is high foreign demand as well as local interest. With the various property types available to …</p>
                    </div>
                    <div style="padding: 10px">
                        <button class="btn btn-success">READ MORE</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-2">
                <div class="card h-100">
                    <img height="120px" src="{{asset('assets/newfrontend/img/card3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body knowledge_base_align">
                        <h1 class="card-title">Buying Property in Cyprus: 5 Most Important Steps</h1>
                        <br/>
                        <p class="card-text">Buying Property in Cyprus This article will explain the five most important steps for buying property in Cyprus. You will learn what to expect and …</p>
                    </div>
                    <div style="padding: 10px">
                        <button class="btn btn-success">READ MORE</button>
                    </div>
                </div>

            </div>
        </div>

    </section>


  <!-- OUR TESTIMONIALS -->


  <!-- HOW TO HELP US -->








  <!-- WHY CLIENTS CHOOSE US? -->







  <!-- CONTACT -->
    <section class="page-section contactss" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted" style="color: white !important">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>

  <!-- CTA -->
  <div class="section bg-primary">
    <div class="content-wrap py-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="text-center text-white">
              <h3>Get Free Consultant : 34-646441927</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection

@section('script')
@endsection
