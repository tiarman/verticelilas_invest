<?php

namespace App\Http\Controllers;

use App\Models\Accordian;
use App\Models\Interview;
use App\Models\LegalPracticeArea;
use App\Models\Partners;
use App\Models\ProfessionalMembership;
use App\Models\Publication;
use App\Models\Slider;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //home page
    // who we are
    public function home(){
        $data['whoWeAre']= WhoWeAre::all();
        $data['legalPracticeArea'] = LegalPracticeArea::all();
        $data['sliders'] = Slider::where('status','=','active')->get();
//        return $data['sliders'];

        // return $data;
        // return $data['legalPracticeArea'];
        return view('site.index',$data);

    }


    public function partners(){
        $data['partners'] = Partners::where('status','=','active')->get();
        $data['member_ships'] = ProfessionalMembership::where('status','=','active')->get();
        $data['video_interviews'] = Interview::where('status','=','active')->get();
        $data['accordian_partners'] = Accordian::where('status','=','active')->get();
        $data['publication_partners'] = Publication::where('status','=','active')->get();
//        return $data;
        return view('site.partners',$data);

    }
}
