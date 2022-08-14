@extends('layouts.site')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('assets/frontend/css/custom.css')}}">
@endsection

@section('content')

<div class="practice-area-banner" style="">

    <div class="practice-text-container">
        <h2>PRACTICE AREAS</h2>
    </div>

</div>

{{--general information  --}}
<div class="general-information-container">
<h2 class="text-center mb-4 section-heading ">General information about practice</h2>
{{-- <div class="heading-border mx-auto mb-5">
    
</div> --}}
<div class="container">
    <p class="gentle-information-para">S Hossain & Associates is a full service law firm in Bangladesh. The legal Practice of S Hossain & Associates covers a vast area of legal arena. The traditional concept of seeing a lawyer in front of the Court room before your case is heard by a Judge has been changing rapidly and now the service of legal counsel in Bangladesh is available in many fields of your life. A lawyer in Bangladesh is your adviser who owns you a fiduciary duty and often an appointment with a lawyer and taking his legal opinion can save you from complex future litigation. For example if you vet/check property documents with a lawyer before buying a property you have greater chance of purchasing a hassle free property as the lawyer knows land law of Bangladesh, in succession if you take advise from a lawyer in Bangladesh you may be saved from family quarrels, in divorce issues advise from a lawyer is very necessary and so on.</p>
</div>
</div>

{{-- our service --}}
<h2 class="text-center mb-4 section-heading  mt-5">As a law firm in Bangladesh we provide our services in the following sectors​</h2>
{{-- <div class="heading-border mx-auto">

</div> --}}

<div class="container mb-5">
    <div class=" row">
        <div class="col-lg-4 col-md-6 mt-4 ">
            <div class="service-card">
               <div class=" d-flex justify-content-center">
                   <img  width="100px" src="{{asset('/assets/frontend/images/litigation.svg')}}" alt="">
                </div>
               <h3 class="card-header">Litigation</h3>
               <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
               
               <div class="d-flex justify-content-center">
                    <!-- Button trigger modal -->
                   <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                       More
                   </button>
                   
                   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                           <div class="modal-content">
                           <h3 class="modal-header-text">Litigation</h3>
                           <div class="modal-body service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigations are the real fact of life for millions of people in Bangladesh. High Court cases can be lengthy in Bangladesh but effective legal service and appearance in court by Barristers and Advocates from S Hossain & Associates would certainly be very effective for you. We guarantee upmost sincerity and up to date legal knowledge to argue your case in any Courts and Tribunals in Bangladesh. We have already conducted Criminal cases in Chief Metropolitan Magistrate Court, Sessions Court and High Court Division of the Supreme Court of Bangladesh. We conduct Bail petitions in any court in Bangladesh. S Hossain & Associates Head of Chambers Barrister Md Sanwar HOSSAIN appears in the Supreme Court of Bangladesh regularly in Civil, Criminal, Writ, Company matters. S Hossain & Associates law firm in Bangladesh is expert in bail hearing, anticipatory bail hearing, filling Writ petition in RAJUK , Eviction, service matters, Public procurement and tender issues etc. We have successfully conducted cases in chamber court of Appellate Division and full bench of Appellate Division along with our Senior Counsel. In litigation we have experience in filling CR case / petition case in CMM and CJM (Magistrate) court, conducting trials in CMM court and in Sessions court. We have vast experience in conducting cases in Artha Rin Adalat court, Nari o Shishu Nirjatan Daman Tribunal.We have experience in conducting succession case, Title suits, injunction hearing etc in Civil Courts. We conduct cases in other areas of Bangladesh as well. 
                           </div>
                           </div>
                       </div>
                   </div>
               </div>
               </div>
           </div>
   
           {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/bank-icon-1.svg')}}" alt="">
             </div>
            <h3 class="card-header">Immigration</h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Immigration</h3>
                        <div class="modal-body service-card-text">We S Hossain & Associates have vast experience in advising and processing F4, IR2 family immigration applications of USA for spouse, children, step children, brothers and sisters and parents. We can help in responding to RFE letters from USCIS. We also provide supports in related matters like preparing affidavit , birth certificate, correction in passport and other ID’s. We have vast experience in drafting and filling schengen Visa appeals. We also assist in Entrepreneurship and Investment Visa application in Canada for Bangladeshi citizens. During immigration process people face different issues such as mismatch in spelling of name and parents name, wrong date of birth in passport/ educational certificate. Sometimes serious lapses are found in kabin nama or talaq certificate which can jeopardize any immigration application made by spouses living abroad to bring their spose from Bangladesh. From our last 15 years experience and well established connection in different Government offices we can assist in those critical problems to take ahead your immigration applications.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/criminal-litigation.svg')}}" alt="">
             </div>
            <h3 class="card-header">Criminal Litigation​
            </h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Criminal Litigation</h3>
                        <div class="modal-body service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigations are the real fact of life for millions of people in Bangladesh. Dhaka High Court cases can be lengthy in Bangladesh but effective legal service and appearance in court by Barristers and Advocates from S Hossain & Associates would certainly be very effective for you. We guarantee upmost sincerity and up to date legal knowledge to argue your case in any Courts and Tribunals in Bangladesh. We have already conducted Criminal cases in Chief Metropolitan Magistrate Court, Sessions Court and High Court Division of the Supreme Court of Bangladesh. We conduct Bail petitions in any court in Bangladesh. S Hossain & Associates Head of Chambers Barrister Md Sanwar HOSSAIN appears in the Supreme Court of Bangladesh regularly in Civil, Criminal, Writ, Company matters.
                            Barrister Md Sanwar HOSSAIN has appeared and conducted Criminal cases under Nari o Shishu Nirjatan Daman Ain, Bail petitions in High Court, Anticipatory Bail in High Court Division in smuggling case, Dowry Prevention case, narcotics case etc.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/bank-icon-1.svg')}}" alt="">
             </div>
            <h3 class="card-header">Banking & Finance​</h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Banking & Finance</h3>
                        <div class="modal-body service-card-text">Banking and Finance is a very important sector in the economy of a country and at present in Bangladesh there are many banks and financial institutions. The Head of Chambers at S Hossain & associates Barrister Md Sanwar Hossain had worked as the General Counsel or Chief Law Officer of The Hongkong and Shanghai Banking Corporation (HSBC) in Bangladesh and as such is well conversant about all the aspects of banking laws and banking business.
                            The law firm is able to take up any work for any bank or financial institutions such as providing legal opinion or vetting on any products, loan documents, merger and acquisitions, loan recovery, swap deal, drafting any instrument or any contract, HR matter of banks etc.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        

        {{-- end card --}}
        
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/divorce-child-custody.svg')}}" alt="">
             </div>
            <h3 class="card-header">Divorce & Child Custody</h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Divorce & Child Custodye</h3>
                        <div class="modal-body service-card-text">As the lifestyle in Bangladesh is changing fast; family and marital disputes are in rise along with divorce in bangladesh. Among all other Law firm in bangladesh, S Hossain & Associates and Barrister Md Sanwar HOSSAIN is an obvious choice for you if you are facing and family disputes or you are considering the options of divorce and you need to know what happens to your children, to your home after divorce. About 8 million Bangladeshi live abroad who were married in Bangladesh under the laws of Bangladesh and often they are confused about how can they execute a divorce. We are confident that we can advise you about marriage, divorce, child custody, marriage between persons of different religions, marriage between Bangladeshi and foreigner, divorce of Bangladeshi living abroad, Divorce of persons who were Bangladeshi at the time of marriage but now have migrated and changed nationality etc.
                            The major laws concerning family issues in Bangladesh are:-
                            Muslim Family Ordinance 1961
                            Muslim Family Rules 1961
                            Muslim Marriage and Talaq Registration Act 1974
                            Muslim Marriage and Talaq Registration Rules 1974
                            Dissolutions of Muslim Marriages Act 1939
                            Special Marriage Act. 1872
                            The Divorce Act
                            The Guardians and Wards Act 1890
                            The Majority Act 1875
                            Domestic Violence Act 2010
                            The Family Court Ordinance 1985s
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}

        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/writ.svg')}}" alt="">
             </div>
            <h3 class="card-header">Writ(Constitutional) Petitions</h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Writ(Constitutional) Petitions</h3>
                        <div class="modal-body service-card-text">The Article 102 of the Constitution of the Peoples Republic of Bangladesh provides that Writ petitions can be filed by any Bangladeshi against any action taken by any public authority which has not been made in accordance with law or the High Court Division may direct any public authority to do whatever they are obliges to do in accordance with law but are not doing.

                            The Head of Chambers of S Hossain & Associates Barrister Md. Sanwar HOSSAIN has moved numerous Writ petitions in the Supreme Courts of Bangladesh on different issued such as Election matters, Governing body of school, non payment of cash incentive by central bank, Government Contracts, Appointment of Seed Dealers etc.
                            
                            Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigations are the real fact of life for millions of people in Bangladesh. Court cases can be lengthy in Bangladesh but effective legal service and appearance in court by Barristers and Advocates from S Hossain & Associates would certainly be very effective for you. We guarantee upmost sincerity and up to date legal knowledge to argue your case in any Courts and Tribunals in Bangladesh. We have already conducted Criminal cases in Chief Metropolitan Magistrate Court, Sessions Court and High Court Division of the Supreme Court of Bangladesh. We conduct Bail petitions in any court in Bangladesh. S Hossain & Associates Head of Chambers Barrister Md Sanwar HOSSAIN appears in the Supreme Court of Bangladesh regularly in Civil, Criminal, Writ, Company matters.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/public-interest-litigation.svg')}}" alt="">
             </div>
            <h3 class="card-header">Public Interest Litigation​
            </h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" style="position: absolute; bottom: 15px;" type="button" class="btn service-button mx-auto" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Public Interest Litigation​
                        </h3>
                        <div class="modal-body service-card-text">The Article 102 of the Constitution of the Peoples Republic of Bangladesh provides that Writ petitions can be filed by any Bangladeshi against any action taken by any public authority which has not been made in accordance with law or the High Court Division may direct any public authority to do whatever they are obliges to do in accordance with law but are not doing.

                            The Head of Chambers of S Hossain & Associates Barrister Md. Sanwar HOSSAIN has moved numerous Writ petitions in the Supreme Courts of Bangladesh on different issued such as Election matters, Governing body of school, non payment of cash incentive by central bank, Government Contracts, Appointment of Seed Dealers etc.
                            
                            Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigations are the real fact of life for millions of people in Bangladesh. Court cases can be lengthy in Bangladesh but effective legal service and appearance in court by Barristers and Advocates from S Hossain & Associates would certainly be very effective for you. We guarantee upmost sincerity and up to date legal knowledge to argue your case in any Courts and Tribunals in Bangladesh. We have already conducted Criminal cases in Chief Metropolitan Magistrate Court, Sessions Court and High Court Division of the Supreme Court of Bangladesh. We conduct Bail petitions in any court in Bangladesh. S Hossain & Associates Head of Chambers Barrister Md Sanwar HOSSAIN appears in the Supreme Court of Bangladesh regularly in Civil, Criminal, Writ, Company matters.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/income-tax.svg')}}" alt="">
             </div>
            <h3 class="card-header">Income Tax & Customs Matters​​
            </h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Income Tax & Customs Matters​​​
                        </h3>
                        <div class="modal-body service-card-text">We have now opened a fully operational unit for Income Tax practice. We have qualified Lawyers, Consultants and Income Tax practitioners in Bangladesh in our firm both working full time or as off counsel to advise on Tax matters. We have strong liaison with Tax officials in Bangladesh. Service provided by us the lawyers In Bangladesh in Income Tax matters:-
                            (i) Opening e TIN
                            (ii) Filling TAX return for individual Tax Payer
                            (iii) Filling TAX return for Business Tax payers
                            (iv) Contesting objections and cases in Tax Appellate Commissioner or Appellate Tribunal
                            (v) Opening VAT Bangladesh registration number and filling VAT return
                            (vi) Filling Reference and Writ petitions in the High Court Division regarding Income Tax , VAT or customs matter.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/employment-matters.svg')}}" alt="">
             </div>
            <h3 class="card-header">Employment Matters​</h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Employment Matters​
                        </h3>
                        <div class="modal-body service-card-text">Employment issues is a area of law in Bangladesh which is less understood by both employees and employers. Whereas the basic objective of Employment laws are to ensure rights for the employees and also to maintain peaceful and working environment in workplaces. The Bangladesh Labour Act 2006 is the major legislation in Employment matter in Bangladesh.
                            There are Labour Courts in major cities of Bangladesh where aggrieved employees may file cases against their employers for wrongful Dismissal, Termination, Non payment of statutory payments, discrimination etc.
                            S Hossain & Associates advises and appear in cases for both employees and employers in Employment issues.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/property-disputes.svg')}}" alt="">
             </div>
            <h3 class="card-header">Property Disputes​
                ​</h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Property Disputes​
                        </h3>
                        <div class="modal-body service-card-text">We regularly advice clients on Real estate matters specially dispute between land owner and developer, flat buyer and developer issues. We have vast experience in advising on Real Estate Development and Management Act 2010. We have successfully conducted Arbitrations and Litigations on disputes falling under Real Estate Development and Management Act 2010.
                            We provide services to people living outside Bangladesh who have family property in Bangladesh. We provide support from collecting documents, deeds, Porchas to do Namjari in the names of current owner and we also assist in selling lands in Bangladesh. We lawyers in Bangladesh provide complete support to people living outside Bangladesh but who has property in Bangladesh.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/regulatory-approvals.svg')}}" alt="">
             </div>
            <h3 class="card-header">Regulatory Approvals​ ​</h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Regulatory Approvals​ </h3>
                        <div class="modal-body service-card-text">All assistance from opening a Company in Bangladesh, Opening a Tax Identification Number, RJSC returns, Board of Investment approvals, Work permit and VISA for foreign officials and their family members, opening a bank account, obtaining 18 A and 18 B approvals from Bangladesh Bank etc are provided from S Hossain & Associates efficiently and in a timely manner in a reduced cost from any other law firms in Bangladesh.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
        <div class="col-lg-4 col-md-6 mt-4 ">
         <div class="service-card">
            <div class=" d-flex justify-content-center">
                <img  width="100px" src="{{asset('/assets/frontend/images/telecommunication.svg')}}" alt="">
             </div>
            <h3 class="card-header">Tele Communication
                ​</h3>
            <p class="text-justify  service-card-text">Although no one wants to face any case or litigation be that Criminal or Civil in nature but Litigation are the real fact of life for millions of people in Bangladesh...</p>
            
            <div class="d-flex justify-content-center">
                 <!-- Button trigger modal -->
                <button style="position: absolute; bottom: 15px;" type="button" class="btn service-button" data-toggle="modal" data-target="#exampleModal">
                    More
                </button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <h3 class="modal-header-text">Tele Communication </h3>
                        <div class="modal-body service-card-text">Any Tele Communication Issues or BTRC, VoIP issues are also addressed by our expert lawyers here in S Hossain & Associates.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- end card --}}
       
    </div>
</div>

@endsection

