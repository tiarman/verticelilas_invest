@extends('layouts.site')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('assets/newfrontend/css/custom.css')}}">
@endsection

@section('content')
<section class="p-0">
    <img height="350px" width="100%"  src="{{asset('assets/newfrontend/img/alexendra/banner.webp')}}" alt="">
</section>
<section class="nox-redential-header">
    <h1>ALEXANDRA VILLAS - SOLD OUTs</h1>
</section>

<section class="px-5 mt-5">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <h3>ABOUT</h3>
            <h3 class="nox-redential-text-color">PROJECT</h3>
        </div>
        <div class="col-sm-6 col-md-8 col-lg-8">
            <p class="nox-redential-text-color">Positioned on elevated land in a highly sought-after area of the historic town of Paphos, Alexandra Villas complex is ideally situated between the old town and the harbour area.</p>
            <p>Occupying substantial plots, the villas all share a modern design theme; individuality is created through clever use of texture and accent materials. Each villa has a private walled garden with more than enough space for a large outdoor entertainment area and a good-sized optional swimming pool. The fertile land of the region means that a lush, semi-tropical garden can easily be established, to give even more seclusion. There is off-road parking for each villa, with lay-by parking for visitors.</p>
            <div class="d-flex justify-content-between">
                <div>
                   <p>Location: Paphos</p>
                   <p>Type: Villas</p>
                   <p>Bedrooms: 3-4</p>
                   <p>Price From: (Please call us)</p>
                </div>
                <div>
                    <p>Covered Area From: 131m2</p>
                    <p>Swimming Pool: Private</p>
                    <p>Sea View: Yes</p>
                    <p>Parking: Private</p>
                 
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-3">
    <div class="row gx-5">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img1.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img2.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img3.jpg')}}" alt=""></div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img4.jpg')}}" alt=""></div>
        
    </div>
</section>

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