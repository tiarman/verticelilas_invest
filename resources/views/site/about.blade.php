@extends('layouts.site');

@section('stylesheet')
<link rel="stylesheet" href="{{asset('assets/newfrontend/css/custom.css')}}">
@endsection

@section('content')
{{-- about banner --}}
<section class="about-banner">
<div class="">
    <img src="{{asset('assets/newfrontend/img/about_banner.jpeg')}}" alt="tester" srcset="">
</div>

</section>

<div class="py-3 ps-5 about-us-title">
    <h1>ABOUT US</h1>
</div>
{{-- about verticelilas invest --}}
<section class="mx-5 my-5">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <h3>About <span class="color-text">verticelilas invest</span></h3>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 " >
            <p class="color-text">A professionally owned and operated company, Sunshadow prides itself on being able to deliver high quality development projects. And we do not subscribe to the philosophy of mass-produced apartments and row upon row of look-alike houses.</p>
            <p>With more than 35 years’ experience in the Cyprus property market, we are proud of our ‘local’ status. We remain committed to seeing the southern coast of Cyprus enhance its reputation as a highly sought-after destination for investors, businesses and pleasure seekers through carefully-planned property development – without adversely impacting the natural environment that Cyprus has to offer. As developers, we understand that we are only ever as good as our last project – so rather than rest on our past successes, we consistently invest in our own evolution. By focusing on our key strengths and innate ability to foresee the trends in real estate, Sunshadow has clearly identified the optimum strategic areas for future growth.</p>
        </div>
    </div>
</section>
{{-- mission --}}
<section class="px-5 my-5 mission-section">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <h3>OUR <span class="color-text">MISSION</span></h3>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 " >
            <p class="color-text">By carefully identifying tomorrow’s demand for residential and investment properties today, Sun Shadow is establishing an enviable reputation for innovation, quality, design and reliability.</p>
            <p>Our Mission is to create outstanding residential property projects that have the greatest potential value as homes, as business opportunities, and as investments. To do this, we ensure first-class design and construction from start to finish by supervising the seamless integration of contributing industry professionals, so that each project can be completed to exacting standards… on time, every time.

                Sunshadow aims to provide every client with a truly dynamic portfolio of properties, offering a unique combination of strong growth returns and positive cash-flow income; all this complemented by an outstanding service package that is carefully researched and compiled with the client’s best interests at the forefront.
                
                Our focus is about making a difference for our clients — plain and simple</p>
        </div>
    </div>
</section>
{{-- message --}}
<section class="px-5 my-5 ">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <h3>MESSAGE <span class="color-text">FROM THE CEO</span></h3>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 " >
            <p class="color-text">Real estate in Cyprus is predicted to be among the world’s star performers in the years to come, and with this potential it is easy to see why investors from around the world are looking to the Cyprus real estate market.</p>
            <p>My view is that property investment is much enhanced if a property can pay for itself while the capital value grows: if you buy an investment property, your investment will be that much more sustainable in the long term if that property brings you an excellent annual rental income. It’s with this in mind that we offer a top-class service to clients looking to rent out their property as a matter of course.</p>
            <p>Astute real estate investors can choose from our impressive portfolio of villas, houses and apartments, in superb locations, at prices that are unlikely to be seen again. And remember, our properties are built not only to attract owners and tenants, but also to bring a handsome return on investment.

                From Paphos to Limassol, and from Larnaca to Protaras, I believe the choice of investment opportunities we can currently offer you is unrivaled.</p>
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

