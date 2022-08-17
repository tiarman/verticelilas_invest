@extends('layouts.site')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('assets/newfrontend/css/custom.css')}}">
@endsection

@section('content')
<section class="nox-residential-banner">
    <div >
        <h1>Nox residential pano 2vr willbe add.</h1>
    </div>
</section>
<section class="nox-redential-header">
    <h1>Nox residential</h1>
</section>
<section class="px-5 mt-5">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <h3>ABOUT</h3>
            <h3 class="nox-redential-text-color">PROJECT</h3>
        </div>
        <div class="col-sm-6 col-md-8 col-lg-8">
            <p class="nox-redential-text-color">Nox mid-rise apartment building is designed for those who share similar values and cultural ideas, and aims to deliver a calm environment for residents to enjoy and embrace. Strate-gically positioned to overlook the new port and marina along Larnaca’s waterfront it is only steps from some of the finest restaurants and shopping that the city has to offer.</p>
            <p>The building’s facade deliberately imitates the ever-changing surface of the sea with its undulating curves, dips and peaks so that the overall effect is one of not only adapting to the surroundings but of actually contributing by adding a new distinctive architecture</p>
            <div class="d-flex justify-content-between">
                <div>
                    <p>Location: Larnaca – New Marina</p>
                        <p>Type: Apartments</p>
                        <p>Bedrooms: 2-3</p>
                        <p>Price From: €1,200,000 + V.A.T</p>
                    </p>
                </div>
                <div>
                    <p>
                        Total Area Up To: 131m2</p>
                       <p> Bathrooms: 2-3</p>
                        <p>Parking: 1 Space</p>
                        <p>Sea View: Yes</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="nox-residential-banner">
    <div >
        <h1>Nox residential pano 2vr willbe add.</h1>
    </div>
</section>

<section class="px-3">
    <div class="row gx-5">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img1.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img2.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img3.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img4.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img5.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img6.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img7.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img8.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img9.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img10.jpg')}}" alt=""></div>
    </div>
</section>

<section class="px-5 mt-5">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <h3>MORE</h3>
            <h3 class="nox-redential-text-color">DESCRIPTION</h3>
        </div>
        <div class="col-sm-6 col-md-8 col-lg-8">
            
            <p>NOX is set right in the heart of the next up-market residential and commercial zone adjacent to the new marina and port upgrade which is destined to bring significant wealth and opportunities to the area, Nox offers unparalleled access to all that Larnaca and Cyprus itself have to offer. Overlooking the sea, and a short walk from the Foinikoudes seafront promenade, NOX is convenient for all city services and amenities, and the nearby highway means that Limassol, Nicosia, Paphos, Ayia Napa, and the Troodos mountains are within easy reach. Better still, Nox is just a short distance from Larnaca’s international airport.</p>
            <img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/pic1.webp')}}" alt="" >
            <img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/pic2.webp')}}" alt="" >
            
        </div>
    </div>
</section>

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

@endsection