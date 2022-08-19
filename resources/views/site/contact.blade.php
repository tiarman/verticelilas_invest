@extends('layouts.site')

@section('stylesheet')
@endsection

@section('content')
    {{-- banner --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d375.9506615044021!2d33.628333!3d34.913243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8536648809e157d!2sSunshadow%20Investments%20LTD!5e1!3m2!1sen!2sus!4v1660757773408!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>

    <div class="our_services_align1">
        <h1 class="container">CONTACT US</h1>
    </div>


    @include('layouts.contactlayout')



@endsection
@section('script')
@endsection
