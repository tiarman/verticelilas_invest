@extends('layouts.site')

@section('stylesheet')
@endsection

@section('content')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <iframe width="100%" height="949" src="https://www.youtube.com/embed/HI4B5pzKQ9Y" title="GAIA Project - Sunshadow Investments" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
{{--            <div class="embed-responsive embed-responsive-16by9">--}}
{{--                <iframe class="embed-responsive-item" width="100%" height="949" src="https://www.youtube.com/embed/HI4B5pzKQ9Y" frameborder="1" allowfullscreen></iframe>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="our_services_align1">
        <h1 class="container">GAIA PROJECT</h1>
    </div>
    <section class="container">
        <div class="row">
            <div class="col-md-4 our_services_align2">
                <h1>ABOUT</h1>
                <h2>PROJECT</h2>

            </div>
            <div class="col-md-8 our_services_align3">
                <p>GAIA is a new collection of two and three bedroom apartments and two meticulously crafted two-storey Skyvillas. Dynamically designed in a way that reflects 21st-century tastes. Gaia provides the opportunity for a perfect marina-side contemporary life-style.</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Location: Larnaca – City Centre</li>
                            <li>Type: Apartments</li>
                            <li>Price From: €1,200,000 + V.A.T</li>
                        </ul>

                    </div>
                    <div class="col-md-6">
                    <ul>
                        <li>Total Area Up To: 97m2</li>
                        <li>Parking: 1 Space</li>
                        <li>Sea View: Yes</li>
                    </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

{{--    <section class="container">--}}
{{--        <div class="gia_img_align">--}}
{{--            <img src="{{asset('assets/newfrontend/img/imgproject1.jpg')}}" alt="">--}}
{{--            <img src="{{asset('assets/newfrontend/img/imgproject2.jpg')}}" alt="">--}}
{{--            <img src="{{asset('assets/newfrontend/img/img1.jpg')}}" alt="">--}}
{{--            <img src="{{asset('assets/newfrontend/img/img2.jpg')}}" alt="">--}}
{{--            <img src="{{asset('assets/newfrontend/img/gaia-4.jpg')}}" alt="">--}}
{{--            <img src="{{asset('assets/newfrontend/img/gaia-2.jpg')}}" alt="">--}}
{{--            <img src="{{asset('assets/newfrontend/img/gaia-1.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="container gia_img_align2">
            <div class="gia_img_align">
                <img src="{{asset('assets/newfrontend/img/imgproject1.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/imgproject2.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/img1.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/img2.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/gaia-4.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/gaia-2.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/gaia-1.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/gaia-11.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/gaia-8.jpg')}}" alt="">
                <img src="{{asset('assets/newfrontend/img/gaia-9.jpg')}}" alt="">
            </div>
    </section>



    <section style="text-align: center; width: 100%; height: 300px">
        <h1>VR IMAGE</h1>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-4 our_services_align2">
                <h1>MORE</h1>
                <h2>DESCRIPTION</h2>

            </div>
            <div class="col-md-8 our_services_align3">
                <p style="color: black; font-size: 15px">GAIA is situated just one minute away from Finikoudes with views of the marina; we chose this location in order to flawlessly combine the soothing element of the sea and the sense of adventure found in the streets across Larnaca. This location of our real estate project really merges beach-side and inner-city together in order to have every aspect of the city accessible.</p>
                <p style="color: black; font-size: 15px">As we are client orientated, we use our one-on-one discussions with clients to create a complete plan and deliver attractive results. Together we really focus on questions such as, what will the residents want to do here? What type of facilities will be suited for the residents? What atmosphere will they expect?</p>
                <p style="color: black; font-size: 15px">That’s why this real estate project in Larnaca, which has been designed by internationally acclaimed architects, has such a particular sense of style and sophistication. We wanted to merge the inner-city, beach-side elegance together by creating apartments with spacious balconies that allow residents to enjoy the Mediterranean sun without leaving the comfort of their own homes. Each apartment allows a natural flow of light in order to accentuate the large living areas and bedrooms as well as emphasizing the classic finishes of the surfaces.</p>
                <p style="color: black; font-size: 15px">Being one of the iconic real estate projects in Larnaca and its location, we knew that material details were extremely important. To start, the GAIA structure is made of reinforced concrete (in accordance with the building permit), has three coats of both external rendering and internal plastering, and thermal double-glazed glass with thermal sliding, just to name a few. As with any good development, there are options to make internal alterations so we welcome discussions concerning adjustments.</p>


            </div>
        </div>
    </section>
    <section style="text-align: end" class="container">
        <img src="{{asset('assets/newfrontend/img/map1.PNG')}}" alt="">
    </section>








@endsection
@section('script')
@endsection
