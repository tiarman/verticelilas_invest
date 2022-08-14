@extends('layouts.site')

@section('stylesheet')

@endsection

@section('content')

 <!-- Head -->

<div class="section partsner-cover-center">
    <div class="content-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h2 class="section-heading text-center text-white">
                MANAGING PARTNER
            </h2>
        </div>
        </div>
      </div>
    </div>
  </div>


 <!-- OUR PARTSNER -->

  <div class="section our-partners-align">

    <div class="content-wrap">
      <div class="container">

        <div class="row">
            @foreach($partners as $partner)

         <div class="partners-align col-md-6">
            <img src="{{$partner->image}}" alt="">
         </div>
         <div class="our-partners-align col-md-6">
            <h2>{{$partner->name}}</h2>
            <h3>{{$partner->qualifications}}</h3>
            <br/>
{{--            <ul>--}}
{{--                <li>Foundation in law, Holborn College, UK (2003)</li>--}}
{{--            <li>LL.B. (Hons.), University of Wolverhampton, UK (2006) </li>--}}
{{--            <li>Postgraduate Diploma (Bar Vocational Course), Northumbria University, U.K. (2007)</li>--}}
{{--            <li>MSS (Industrial Relations & Labour Studies), Dhaka University</li>--}}
{{--            <li>Professional Qualifications</li>--}}
{{--            <li>Of Lincoln’s Inn, Barrister-at- Law</li>--}}
{{--            <li>Bangladesh Bar Council Advocate, Supreme Court of Bangladesh</li>--}}
{{--            </ul>--}}
             {!! $partner->description !!}
         </div>

        </div>

    </div>
  </div>
      @endforeach
  </div>

   <!-- BIOGRAPHY -->
   <div class="section biography-content-align">
    <div class="content-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h2 class="section-heading text-center text-Black">
                BIOGRAPHY
            </h2>
            <p class="subheading text-center mb-5">Every case is very important to us and we always take care of them seriously.</p>
          </div>
        </div>
        <div class="row">
          <p style="text-align: justify" class="choose-us-text-align text-black">{{$partner->biography}}</p>
        </div>
      </div>
    </div>
  </div>

     <!-- VIDEOS OF INTERVIEW -->
     <div class="section interview-content-align">
        <div class="content-wrap">
          <div class="container">

            <div class="row">
              <div class="col-sm-12 col-md-12">
                <h2 class="section-heading text-center text-Black">
                    VIDEOS OF INTERVIEW
                </h2>
                <p class="subheading text-center mb-5">Every case is very important to us and we always take care of them seriously.</p>
              </div>
            </div>
            <div class="row interview-content-align1">
                @foreach($video_interviews as $video_interview)
          <div class="col-md-6">
            {{-- <video src="{{asset('assets/frontend/images/video1.mp4')}}"></video> --}}
            <iframe width="500" height="300" src="{{$video_interview->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          </div>
                @endforeach
{{--          <div class="col-md-6">--}}
{{--            <iframe width="500" height="300" src="https://www.youtube.com/embed/qS_VWG3JEZg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}

{{--          </div>--}}
            </div>

          </div>
        </div>
      </div>

           <!-- Professional membership -->
     <div class="section membership-content-align">
        <div class="content-wrap">
          <div class="container">
            <div class="row">

              <div class="col-sm-12 col-md-12">
                <h2 class="section-heading text-center text-Black">
                    Professional membership
                </h2>
                <p class="subheading text-center mb-5">Every case is very important to us and we always take care of them seriously.</p>
              </div>

            </div>


            <div class="row">
                <!-- Item 1 -->

                @foreach($member_ships as $member_ship)
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                  <div class="box-icon-1 text-center">

                    <div class="body-content">
                      <h3>{{$member_ship->title}}</h3>
                      <p>{{$member_ship->short_description}}</p>

                      <button class="btn btn-primary">Visit Now</button>
                    </div>

                  </div>
                </div>
                @endforeach
              </div>
            </div>



              <!-- accordian -->
              <div class="container mt-5 mb-5">
                  @foreach($accordian_partners as $accordian_partner)
                <div class="accordion" id="accordionExample{{$accordian_partner->id}}">

                    <div class="card">
                      <div class="card-header" id="headingOne{{$accordian_partner->id}}">
                        <h2 class="mb-0">
                          <p class="btn btn-link btn-block text-left accordian-tittle-align" type="button" data-toggle="collapse" data-target="#collapseOne{{$accordian_partner->id}}" aria-expanded="true" aria-controls="collapseOne">
                            {{$accordian_partner->title}}
                          </p>
                        </h2>
                      </div>

                      <div id="collapseOne{{$accordian_partner->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample{{$accordian_partner->id}}">
                        <div class="card-body">
{{--                            <ul>--}}
{{--                                <li>Appearing and successfully defending an Arbitration claim worth USD 15 million</li>--}}
{{--                                <li>Appearing in numerous ship arrest/ release cases</li>--}}
{{--                                <li>Successfully appearing in Writ matters (Constitutional matters) for no Suit injunction (very rare order in Bangladesh)</li>--}}
{{--                                <li>Successfully writing off around 200 Million BDT loan penalty in a Writ Petition</li>--}}
{{--                                <li>Conducting Criminal trial for white color fraud / share embezzlement worth of BDT 5000 Million</li>--}}
{{--                                <li>Defending celebrity Defendant in a Cyber crime case</li>--}}
{{--                                <li>Appearing on behalf on Banasree Society in a case regarding their election and successfully overturning the decision of appointment of Administrator by Government</li>--}}
{{--                                <li>Appearing in a Public procurement matter for a leading Chinese Construction company for a Project worth of USD 15 MILLION</li>--}}
{{--                                <li>Successfully appearing for a leading construction firm in Bangladesh in High Court and helping a legal-Administrative process to secure a Construct contract to construct Election Commission building in Dhaka a project of BDT 2000 Million.</li>--}}
{{--                                <li>Successfully appearing in a Criminal appeal and securing release of food supplements which was confiscated by DG Drugs as unauthorized medicine.</li>--}}
{{--                            </ul>--}}
                            {!! $accordian_partner->description !!}
                        </div>
                      </div>
                    </div>
{{--                    <div class="card">--}}
{{--                      <div class="card-header" id="headingTwo">--}}
{{--                        <h2 class="mb-0">--}}
{{--                          <button class="btn btn-link btn-block text-left collapsed accordian-tittle-align" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                            Transnational matters--}}
{{--                          </button>--}}
{{--                        </h2>--}}
{{--                      </div>--}}
{{--                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">--}}
{{--                        <div class="card-body">--}}
{{--                          <ul>--}}
{{--                            <li>Working as Legal counsel in M&A matter of Cement factory in Bangladesh worth BDT 2000 Million.</li>--}}
{{--                            <li>Setting up business operation of leading supply chain company</li>--}}
{{--                            <li>Advising on a Country Distributorship arrangement worth of BDT 200 million</li>--}}
{{--                            <li>Advising on property distribution of a noted business family worth of BDT 4000 Million.</li>--}}
{{--                            <li>Drafting and advising on terms and conditions, data privacy policy, return policy of a leading e commerce site in Bangladesh.</li>--}}
{{--                            <li>Drafting HR policy of National Bank of Pakistan-Bangladesh office, Grameen Uniqlo, Moringo Organics Bangladesh Ltd and many more companies.</li>--}}
{{--                            <li>Drafting HR policy of National Bank of Pakistan-Bangladesh office, Grameen Uniqlo, Moringo Organics Bangladesh Ltd and many more companies.</li>--}}
{{--                            <li>Advising Padma bank on project financing of Doctors Feed</li>--}}
{{--                          </ul>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <div class="card">--}}
{{--                      <div class="card-header" id="headingThree">--}}
{{--                        <h2 class="mb-0">--}}
{{--                          <button class="btn btn-link btn-block text-left collapsed accordian-tittle-align" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                            Immigration cases--}}
{{--                          </button>--}}
{{--                        </h2>--}}
{{--                      </div>--}}
{{--                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">--}}
{{--                        <div class="card-body">--}}
{{--                            <ul>--}}
{{--                                <li>Successfully filing a Waiver petition for US immigrant visa on a 212 inadmissibility</li>--}}
{{--                                <li>Successfully preparing affidavit of witness and explanation affidavit of delay birth certificate for more than 10 clients in 2020</li>--}}
{{--                                <li>Successfully filing a Waiver petition for US immigrant visa on a 212 inadmissibility</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header" id="headingThree">--}}
{{--                          <h2 class="mb-0">--}}
{{--                            <button class="btn btn-link btn-block text-left collapsed accordian-tittle-align" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">--}}
{{--                                Family matters (Divorce, child custody)--}}
{{--                            </button>--}}
{{--                          </h2>--}}
{{--                        </div>--}}
{{--                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">--}}
{{--                          <div class="card-body">--}}
{{--                            <ul>--}}
{{--                                <li>Barrister Hossain has appeared in child custody matters for fathers in Bangladesh and has obtained very favorable orders in favor of fathers</li>--}}
{{--                                <li>Barrister Hossain has legal completed more than 100 cross border divorce in Bangladesh</li>--}}

{{--                            </ul>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}

                  </div>
                  @endforeach
              </div>

  <!-- Publications -->
  <div class="section Publications-content-align">
    <div class="content-wrap">
      <div class="container">
          @foreach($publication_partners as $publication_partner)
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h2 class="section-heading text-center text-Black">
                Publications
            </h2>

          </div>
        </div>
        <div class="row Publications-content-align2">
          <img src="{{$publication_partner->image}}" alt="">
        </div>
          @endforeach
      </div>
    </div>
  </div>

  <!-- Brief life sketch -->
  <div class="section sketch-content-align">
    <div class="content-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h2 class="section-heading text-center text-Black">
                Brief life sketch
            </h2>

          </div>
        </div>
        <div class="row">
          <p style="text-align: justify" class="choose-us-text-align text-black">Barrister Sanwar Hossain is practicing as a lawyer in Bangladesh for nearly 15 years now. He has established him as a leading lawyer in Bangladesh. He is the go to lawyer for Divorce, child custody matters in Bangladesh. He is result oriented, detailed and thorough. Timely result with best legal mind is the key to success for him in legal battles.</p>



        </div>
        <div class="sketch-button-align">
            <button class="btn btn-primary">Know More</button>
          </div>
      </div>
    </div>
  </div>



   <!-- INTERVIEW ON RADIO -->
   <div class="section radio-content-align">
    <div class="content-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h2 class="section-heading text-center text-Black">
                INTERVIEW ON RADIO
            </h2>

          </div>
        </div>
        <div class="row radio-content-align1">
      <div class="col-md-6">
        <p>Barrister Sanwar Hossain, Advocate in Bangladesh speaking at a radio show on Divorce law in Bangladesh in Radio shadhin 92.4 FM recently.</p>
        {{-- <video src="{{asset('assets/frontend/images/video1.mp4')}}"></video> --}}
        <iframe width="500" height="100" src="https://www.youtube.com/embed/qS_VWG3JEZg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
      <div class="col-md-6">
        <p>Barrister Sanwar Hossain, Advocate in Bangladesh has given Interview on Anti Corruption law in Radio ABC.</p>
        <iframe width="500" height="100" src="https://www.youtube.com/embed/qS_VWG3JEZg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
        </div>
      </div>
    </div>
  </div>






        </div>
      </div>



@endsection
@section('script')
@endsection
