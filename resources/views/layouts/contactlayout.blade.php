<!doctype html>
<html lang="en">
<head>
    <title>Contact Form 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/contacts/css/style.css')}}">

</head>

<body>
@yield('contcts')
<section class="ftco-section">
    <div class="container">
        <div style="text-align: center" class="row justify-content-center">
            <h1 style="text-align: center">Contact Info</h1>
            <h6>Phone: 34-646441927</h6>
            <h6>Address: Calle Gutenberg 5 4BIS 29016 Malaga Spain</h6>
            <h6>info@verticelilasinvest.com</h6>

        </div>

        <div style="text-align: center; margin-top: 60px">
            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft; color: white">
{{--                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>--}}
                <div>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-facebook"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-youtube"></i></a><a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>




        <div style="margin-top: 50px" class="row justify-content-center">
            <div class="col-lg-10">
                <div class="wrapper img" style="background-image: url({{asset('assets/contacts/images/img.jpg')}});">
                    <div class="row">
                        <div class="col-md-9 col-lg-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Get in touch with us</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('assets/contacts/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/contacts/js/popper.js')}}"></script>
<script src="{{asset('assets/contacts/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/contacts/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/contacts/js/main.js')}}"></script>

</body>
</html>

