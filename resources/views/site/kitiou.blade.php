@extends('layouts.site')

@section('stylesheet')
@endsection

@section('content')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/newfrontend/img/Articles.png')}}" class="d-block w-100" alt="...">
            </div>

        </div>
    </div>

    <div class="our_services_align1">
        <h1 class="container">Vilas Á Beira-mar</h1>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-4 our_services_align2">
                <h1>ABOUT</h1>
                <h2>PROJECT</h2>

            </div>
            <div class="col-md-8 our_services_align3">
                <p>Kitiou Residences is a contemporary gated residential apartment development in a quiet and desirable street in central Larnaca, just a short walk from the sea front and many of the town’s attractions and facilities.</p>
                <p style="color: black">The design of this four-level building offers a great choice of 2 and 3 bedroom apartments in various spacious configurations. Kitiou Residences are well priced, and ideal for young professionals and families.</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Location: Praia do Santa Cruz Portugal</li>
                            <li>Type: Apartments</li>
                            <li>Price From: €200.000 + V.A.T</li>
                        </ul>

                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Total Area Up To: 120m2</li>
                            <li>Parking: 1 Space</li>
                            <li>Gated: Yes</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container">
        <div class="row gy-3">
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/kitiou/3D1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/kitiou/3D1.jpg')}}" alt=""></div></a>


            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/kitiou/3d2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/kitiou/3d2.jpg')}}" alt=""></div></a>

            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/kitiou/3d3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/kitiou/3d3.jpg')}}" alt=""></div></a>

            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/kitiou/3d4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/kitiou/3d4.jpg')}}" alt=""></div></a>

            </div>

        </div>
    </section>


    {{--    <section class="container gia_img_align2">--}}
    {{--        <div class="gia_img_align">--}}
    {{--            <img src="{{asset('assets/newfrontend/img/imgproject1.jpg')}}" alt="">--}}
    {{--            <img src="{{asset('assets/newfrontend/img/imgproject2.jpg')}}" alt="">--}}
    {{--            <img src="{{asset('assets/newfrontend/img/img1.jpg')}}" alt="">--}}
    {{--            <img src="{{asset('assets/newfrontend/img/img2.jpg')}}" alt="">--}}
    {{--            <img src="{{asset('assets/newfrontend/img/gaia-4.jpg')}}" alt="">--}}
    {{--        </div>--}}
    {{--    </section>--}}





@endsection
@section('script')
@endsection
