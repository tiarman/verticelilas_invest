@extends('layouts.site')

@section('stylesheet')
@endsection

@section('content')
    <!-- Head -->
    <div class="card bg-dark text-white">
        <img src="{{asset('assets/newfrontend/img/articles1.png')}}" class="card-img" alt="...">
        <div class="card-img-overlay">
            {{--            <h5 class="card-title">Card title</h5>--}}
            {{--            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
            {{--            <p class="card-text">Last updated 3 mins ago</p>--}}
        </div>
    </div>

    <section>
        <div class="container">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        {{--                        <img src="{{asset('assets/newfrontend/img/articles1.png')}}" class="card-img" alt="...">--}}
                        <div class="col-sm-6 col-md-12"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img1.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Buy Properties in Larnaca: How-To Guide in 2022</h5>
                            <p class="card-text"><small class="text-muted">August 16, 2022</small></p>
                            <br/>
                            <br/>
                            <p class="card-text">Larnaca is one of the prime locations in Cyprus to buy properties. The time is now since the real estate market in Larnaca is proliferating.</p>
                            <br/>
                            <div>
                                <button class="btn btn-primary">Read More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        {{--                        <img src="{{asset('assets/newfrontend/img/articles1.png')}}" class="card-img" alt="...">--}}
                        <div class="col-sm-6 col-md-12"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img1.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">2 Luxury Properties in Larnaca: GAIA & NOX</h5>
                            <p class="card-text"><small class="text-muted">August 16, 2022</small></p>
                            <br/>
                            <br/>
                            <p class="card-text">When it comes to luxury properties in Larnaca, there are always four factors that you need to keep in mind when making a choice. The</p>
                            <br/>
                            <div>
                                <a type="button" href="{{route('articlesdetails')}}" class="btn btn-primary">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        {{--                        <img src="{{asset('assets/newfrontend/img/articles1.png')}}" class="card-img" alt="...">--}}
                        <div class="col-sm-6 col-md-12"><img width="100%" src="{{asset('assets/newfrontend/img/noxResidential/img2.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">15 Important Reasons Why to Invest in Larnaca Now in 2022</h5>
                            <p class="card-text"><small class="text-muted">August 16, 2022</small></p>
                            <br/>
                            <br/>
                            <p class="card-text">Larnaca is one of the prime locations in Cyprus to buy properties. The time is now since the real estate market in Larnaca is proliferating.</p>
                            <br/>
                            <div>
                                <button class="btn btn-primary">Read More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
















@endsection
@section('script')
@endsection
