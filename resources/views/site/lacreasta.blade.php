@extends('layouts.site')

@section('stylesheet')
@endsection

@section('content')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
{{--                <img src="{{asset('assets/newfrontend/img/Articles.png')}}" class="d-block w-100" alt="...">--}}
                <iframe width="100%" height="480" src="https://www.youtube.com/embed/5YL_r-BOdtM" title="SEVEN NEW INDIVIDUAL VILLAS WITH PRIVATE POOLS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
    </div>

    <div class="our_services_align1">
        <h1 class="container">LA CRESTA DEL MAR</h1>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-4 our_services_align2">
                <h1>LA CRESTA DEL MAR</h1>
                <h2>DESCRIPTION</h2>

            </div>
            <div class="col-md-8 our_services_align3">
                <p>Unique and rare urban residential development set in a private community of 12,142m2. These spacious houses with individual gardens and private negative  pool are situated on a ridge line providing uninterrupted views of the Mediterranean sea , the entire coast line from Almunecar east and the majestic Sierra Nevada mountains The seven houses are approached up a private pine tree lined cul de sac drive with easy access to individual private secure parking. There is plenty of on-street parking for guests.</p>

                <br/>
                <p style="color: black">

                </p>

            </div>
        </div>
    </section>


    <section class="container">
        <div class="row gy-3">
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/1.jpg')}}" alt=""></div></a>


            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/2.jpg')}}" alt=""></div></a>

            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/3.jpg')}}" alt=""></div></a>

            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/4.jpg')}}" alt=""></div></a>

            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/5.jpg')}}" alt=""></div></a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/11.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/11.jpg')}}" alt=""></div></a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/12.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/12.jpg')}}" alt=""></div></a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/13.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/13.jpg')}}" alt=""></div></a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('assets/newfrontend/img/lacre/14.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/14.jpg')}}" alt=""></div></a>
            </div>
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <a href="{{asset('assets/newfrontend/img/lacre/15.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><div><img width="100%" src="{{asset('assets/newfrontend/img/lacre/15.jpg')}}" alt=""></div></a>--}}
{{--            </div>--}}

        </div>
    </section>




@endsection
@section('script')
@endsection
