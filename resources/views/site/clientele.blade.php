@extends('layouts.site');

@section('stylesheet')
<link rel="stylesheet" href="{{asset('assets/frontend/css/custom.css')}}">
@endsection

@section('content')
{{-- banner --}}
<div class="practice-area-banner" style="">
    <div class="practice-text-container">
        <h2>CLIENTELE</h2>
    </div>
 </div>

 <div class="container my-5">
    <h2 class="text-center mb-4 section-heading">As law firm in Banglasdesh, we serve locak ans international client world</h2>
    {{-- <div class="heading-border mx-auto mb-5">

    </div> --}}

    <div class="row ">
     <div class="col-md-6 ">
        <ul style="list-style-type: square">
            <li ><h4 class="Text-dark clientele-list">RSPL, India</h4></li>
            <li ><h4 class="Text-dark clientele-list">SB Group</h4></li>
            <li ><h4 class="Text-dark clientele-list">Fast Retailing Japan LImited (UNIQLO), Japan</h4></li>
            <li ><h4 class="Text-dark clientele-list">EXIM Bank Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">ICB Islamic Bank Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Agrani Bank Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">The Farmers Bank Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Sonali Bank Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Onedrop Group, Malaysia</h4></li>
            <li ><h4 class="Text-dark clientele-list">Clyde & Co. Hong Kong</h4></li>
            <li ><h4 class="Text-dark clientele-list">Inhemeter, China</h4></li>
            <li ><h4 class="Text-dark clientele-list"> TFT Displays bhd, Malaysia</h4></li>
            <li ><h4 class="Text-dark clientele-list">Acero Industrial Limited, China</h4></li>
            <li ><h4 class="Text-dark clientele-list">William E Corner, USA</h4></li>
            <li ><h4 class="Text-dark clientele-list">International Jute Study Group</h4></li>
            <li ><h4 class="Text-dark clientele-list">The Engineers and Architects Ltd Bangladesh</h4></li>
            <li ><h4 class="Text-dark clientele-list">TEAL - TBL Consortium</h4></li>
            <li ><h4 class="Text-dark clientele-list">Image Real estate and Engineering Corpor</h4></li>
            <li ><h4 class="Text-dark clientele-list">IBSYS Canada</h4></li>
            <li ><h4 class="Text-dark clientele-list">Mass International Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">China Petroleum Pipeline Bureau</h4></li>
            <li ><h4 class="Text-dark clientele-list">SAMI Direct Bangladesh Pvt. Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Bohemian Travel Gears Ltd, KEPZ, Chittagong</h4></li>
            <li ><h4 class="Text-dark clientele-list">Interocean Energy Ltd, Srilanka</h4></li>
            <li ><h4 class="Text-dark clientele-list">Tangshan Xingtuo Trading Co Ltd, China</h4></li>
            <li ><h4 class="Text-dark clientele-list"> GMAC, USA</h4></li>
            <li ><h4 class="Text-dark clientele-list">RELX India (pvt) Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Baltic Testing BD Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Union Bank Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Moringo Nutrition Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Glonutra Bangladesh Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Lankan Alliance Finance Ltd</h4></li>
            <li ><h4 class="Text-dark clientele-list">Atlas Axialla Srilanka</h4></li>

        </ul>
     </div>



     <div class="col-md-6">
        <ul style="list-style: square">
            <li><h4 class="Text-dark clientele-list">Mossac Fonseca Hong Kong</li>
            <li><h4 class="Text-dark clientele-list">Legal Aid Board Ireland</li>
            <li><h4 class="Text-dark clientele-list">Grameen Uniqlo</li>
            <li><h4 class="Text-dark clientele-list">Uniqlo Social Business Ltd Bangladesh</li>
            <li><h4 class="Text-dark clientele-list">The Sthapathi Associates</li>
            <li><h4 class="Text-dark clientele-list">GESIN, Korea</li>
            <li><h4 class="Text-dark clientele-list">Campvalley Trading HK</li>
            <li><h4 class="Text-dark clientele-list">DRH Logistics</li>
            <li><h4 class="Text-dark clientele-list">Sam Young Express Ltd. Korea</li>
            <li><h4 class="Text-dark clientele-list">S Mahmood International</li>
            <li><h4 class="Text-dark clientele-list">Paragon Immigration, Ireland/UK</li>
            <li><h4 class="Text-dark clientele-list">B Ko Trans, South Korea</li>
            <li><h4 class="Text-dark clientele-list">Euro Kids India, India</li>
            <li><h4 class="Text-dark clientele-list">Break Candy Allana Brothers UAE</li>
            <li><h4 class="Text-dark clientele-list">The Content Group, UK</li>
            <li><h4 class="Text-dark clientele-list">Laces & Textiles, Canada</li>
            <li><h4 class="Text-dark clientele-list">Hanzburz, UAE</li>
            <li><h4 class="Text-dark clientele-list">Steel Eagle, Malta</li>
            <li><h4 class="Text-dark clientele-list">Legal Expat, Spain</li>
            <li><h4 class="Text-dark clientele-list">Brookman Solicitors, UK</li>
            <li><h4 class="Text-dark clientele-list">Tahota Law Firm, China</li>
            <li><h4 class="Text-dark clientele-list">Dedao Trading (pvt) Ltd</li>
            <li><h4 class="Text-dark clientele-list">Sea Pal Marine INC, Cyprus</li>
            <li><h4 class="Text-dark clientele-list">University of Economics, VARNA, Bulgaria</li>
            <li><h4 class="Text-dark clientele-list">Alpha Flight Guru</li>
            <li><h4 class="Text-dark clientele-list">The Anteous Travel and Tourism, Greece</li>
            <li><h4 class="Text-dark clientele-list">Desipro PTE Ltd</li>
            <li><h4 class="Text-dark clientele-list">Islami Bank Bangladesh Ltd</li>
            <li><h4 class="Text-dark clientele-list">Pugos Bangladesh Ltd</li>
            <li><h4 class="Text-dark clientele-list">China Railway 24th Bureau Group Ltd</li>
            <li><h4 class="Text-dark clientele-list">The Dutch Bangla Bank Ltd</li>
            <li><h4 class="Text-dark clientele-list">Delta Trading BV Netherlands</li>
            <li><h4 class="Text-dark clientele-list">Jiangsu Provincial Construction Company</li>
           
        </ul>
     </div>
    </div>
 </div>
@endsection