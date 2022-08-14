@extends('layouts.site');

@section('stylesheet')
<link rel="stylesheet" href="{{asset('assets/frontend/css/custom.css')}}">
@endsection

@section('content')

{{-- banner --}}
<div class="practice-area-banner">
    <div class="practice-text-container">
        <h2>Our Team</h2>
    </div>
</div>

<div class="container mb-5">
    <h2 class="text-center mb-4 section-heading  mt-5">ASSOCIATES​</h2>
</div>

<div class="row container mx-auto">
    <!-- Item 1 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="box-icon-1 text-center">
        <div class="">
{{--                <i class="fa fa-fire"></i>--}}
            <img style="border-radius: 0px" width="100px" src="{{asset('/assets/frontend/images/team01.jpg')}}" alt="">
        </div>
        <div class="body-content">
          <h3>Md Nazmul Hasan</h3>
          <h5>Associate</h5>
          <p>Md Nazmul Hasan has completed her LLB (Hons) from University of London in 2011 and LLM in International Trade Law from University of Northumbria, UK in 2013.</p>
        </div>
      </div>
    </div>
    <!-- Item 2 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="box-icon-1 text-center">
        <div class="">
          {{--                <i class="fa fa-fire"></i>--}}
          <img style="border-radius: 0px" width="100px" src="{{asset('/assets/frontend/images/team02.jpg')}}" alt="">
                  </div>
        <div class="body-content">
          <h3>Md Mohiuddin Hasan</h3>
          <h5>Associate</h5>
          <p>Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh.</p>
        </div>
      </div>
    </div>
    <!-- Item 3 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="box-icon-1 text-center">
        <div class="">
          {{--                <i class="fa fa-fire"></i>--}}
          <img style="border-radius: 0px" width="100px" src="{{asset('/assets/frontend/images/team03.jpg')}}" alt="">
                  </div>
        <div class="body-content">
          <h3>Md Sadek Hasan</h3>
          <h5>Associate</h5>
          <p>Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh.</p>
        </div>
      </div>
    </div>
    <!-- Item 4 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="box-icon-1 text-center">
        <div class="">
          {{--                <i class="fa fa-fire"></i>--}}
          <img style="border-radius: 0px" width="100px" src="{{asset('/assets/frontend/images/team04.jpg')}}" alt="">
                  </div>
        <div class="body-content">
          <h3>Md Said Hasan</h3>
          <h5>Associate</h5>
          <p>Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh.</p>
        </div>
      </div>
    </div>
    <!-- Item 5 -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
      <div class="box-icon-1 text-center">
        <div class="">
          {{--                <i class="fa fa-fire"></i>--}}
          <img style="border-radius: 0px" width="100px" src="{{asset('/assets/frontend/images/team01.jpg')}}" alt="">
                  </div>
        <div class="body-content">
          <h3>Md Sofiqul  Hasan</h3>
          <h5>Associate</h5>
          <p>Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh.</p>
        </div>
      </div>
    </div>
</div>
{{-- staff --}}
<div class="container mb-5">
  <h2 class="text-center mb-4 section-heading  mt-5">OUR STAFF</h2>
</div>

<div class="row container mx-auto">
  <!-- Item 1 -->
  <div class="col-12 col-sm-6 col-md-4 mb-4">
    <div class="box-icon-1 text-center">
      <div class="">

          <img  width="100px" src="{{asset('assets/frontend/images/team-img1.jpg')}}" alt="">
      </div>
      <div class="body-content">
        <h3>Md Redwan Hasan</h3>
        <h5>Assistant</h5>
        <p>Md Redwan Hasan has completed her LLB (Hons) from University of London in 2011 and LLM in International Trade Law from University of Northumbria, UK in 2013.</p>
      </div>
    </div>
  </div>
  <!-- Item 2 -->
  <div class="col-12 col-sm-6 col-md-4 mb-4">
    <div class="box-icon-1 text-center">
      <div class="">
{{--                <i class="fa fa-fire"></i>--}}
          <img style="border-radius: 0px" width="100px" src="{{asset('/assets/frontend/images/team-img2.jpg')}}" alt="">
      </div>
      <div class="body-content">
        <h3>Md Rakib Hasan</h3>
        <h5>Assistant</h5>
        <p>Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh.</p>
      </div>
    </div>
  </div>
  <!-- Item 1 -->
  <div class="col-12 col-sm-6 col-md-4 mb-4">
    <div class="box-icon-1 text-center">
      <div class="">
{{--                <i class="fa fa-fire"></i>--}}
          <img style="border-radius: 0px" width="100px" src="{{asset('/assets/frontend/images/team03.jpg')}}" alt="">
      </div>
      <div class="body-content">
        <h3>Md Rasid Hasan</h3>
        <h5>Assistant</h5>
        <p>Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh.</p>
      </div>
    </div>
  </div>
</div>

@endsection