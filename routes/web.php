<?php

use App\Http\Controllers\AccordianController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\LegalPracticeAreaController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhoWeAreController;
use App\Models\LegalPracticeArea;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AttorneyController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProfessionalMembershipController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SiteController;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//   return view('site.index');
// })->name('home');


Route::get('/logout', function () {
  Auth::logout();
  return redirect()->route('login');
})->name('logout');

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified'
])->group(function () {
  Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

  Route::get('/profile', [AdminController::class, 'profile'])->name('profile');


  # Ajax
  Route::prefix('ajax')->name('ajax.')->group(function (){
    Route::post('/update/user/status', [UserController::class, 'ajaxUpdateStatus'])->name('update.user.status');
    Route::post('/update/slider/status', [SliderController::class, 'ajaxUpdateStatus'])->name('update.slider.status');
    Route::post('/update/clients/status', [ClientsController::class, 'ajaxUpdateStatus'])->name('update.clients.status');
    Route::post('/update/attorney/status', [AttorneyController::class, 'ajaxUpdateStatus'])->name('update.attorney.status');
    Route::post('/update/legalPractice/status', [LegalPracticeAreaController::class, 'ajaxUpdateStatus'])->name('update.legal.practice.status');
    Route::post('/update/practiceArea/status', [PracticeController::class, 'ajaxUpdateStatus'])->name('update.practice.area.status');

    Route::post('/update/team/status', [TeamController::class, 'ajaxUpdateStatus'])->name('update.team.status');
    Route::post('/update/article/status', [ArticleController::class, 'ajaxUpdateStatus'])->name('update.article.status');
    Route::post('/update/partners/status', [PartnersController::class, 'ajaxUpdateStatus'])->name('update.partners.status');
    Route::post('/update/partners/membership/status', [ProfessionalMembershipController::class, 'ajaxUpdateStatus'])->name('update.partners.membership.status');

      Route::post('/update/partners/interview/status', [InterviewController::class, 'ajaxUpdateStatus'])->name('update.partners.interview.status');
      Route::post('/update/partners/accordian/status', [AccordianController::class, 'ajaxUpdateStatus'])->name('update.partners.accordian.status');
    Route::post('/update/user/status', [LegalPracticeAreaController::class, 'ajaxUpdateStatus'])->name('update.user.status');

    Route::post('/update/partners/publication/status', [PublicationController::class, 'ajaxUpdateStatus'])->name('update.partners.publication.status');




  });

  #Users
  Route::prefix('user')->name('user.')->group(function () {
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/manage/{id}', [UserController::class, 'manage'])->name('manage');
    Route::get('/{id}/view', [UserController::class, 'view'])->name('view');
    Route::delete('/destroy', [UserController::class, 'destroy'])->name('destroy');
    Route::get('/list', [UserController::class, 'index'])->name('list');
  });


  #Slider
  Route::prefix('slider')->name('slider.')->group(function () {
    Route::get('/create', [SliderController::class, 'create'])->name('create');
    Route::post('/store', [SliderController::class, 'store'])->name('store');
    Route::get('/manage/{id}', [SliderController::class, 'manage'])->name('manage');
    Route::get('/{id}/view', [SliderController::class, 'view'])->name('view');
    Route::delete('/destroy', [SliderController::class, 'destroy'])->name('destroy');
    Route::get('/list', [SliderController::class, 'index'])->name('list');
  });


  # who we are
Route::prefix('who-we-are')->name('who.we.are.')->group(function(){
    Route::get('/create',[WhoWeAreController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[WhoWeAreController::class, 'manage'])->name('manage');
    Route::post('/store',[WhoWeAreController::class,'store'])->name('store');
    Route::get('/view',[WhoWeAreController::class,'index'])->name('view');
    Route::delete('/destroy', [WhoWeAreController::class, 'destroy'])->name('destroy');
});


});
  # legal practice area
Route::prefix('legal-practice-area')->name('legal.practice.area.')->group(function(){
    Route::get('/create',[LegalPracticeAreaController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[LegalPracticeAreaController::class, 'manage'])->name('manage');
    Route::post('/store',[LegalPracticeAreaController::class,'store'])->name('store');
    Route::get('/view',[LegalPracticeAreaController::class,'index'])->name('view');
    Route::delete('/destroy', [LegalPracticeAreaController::class, 'destroy'])->name('destroy');
});
  #  practice
Route::prefix('practice-area')->name('practice.area.')->group(function(){
    Route::get('/create',[PracticeController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[PracticeController::class, 'manage'])->name('manage');
    Route::post('/store',[PracticeController::class,'store'])->name('store');
    Route::get('/view',[PracticeController::class,'index'])->name('view');
    Route::delete('/destroy', [PracticeController::class, 'destroy'])->name('destroy');
});
  # Clients Sayes
  Route::prefix('clients')->name('clients.')->group(function(){
    Route::get('/create',[ClientsController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[ClientsController::class, 'manage'])->name('manage');
    Route::post('/store',[ClientsController::class,'store'])->name('store');
    Route::get('/list',[ClientsController::class,'index'])->name('list');
    Route::delete('/destroy', [ClientsController::class, 'destroy'])->name('destroy');
});

 # Teams
 Route::prefix('team')->name('team.')->group(function(){
    Route::get('/create',[TeamController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[TeamController::class, 'manage'])->name('manage');
    Route::post('/store',[TeamController::class,'store'])->name('store');
    Route::get('/list',[TeamController::class,'index'])->name('list');
    Route::delete('/destroy', [TeamController::class, 'destroy'])->name('destroy');
});


 # Attorney
 Route::prefix('attorney')->name('attorney.')->group(function(){
    Route::get('/create',[AttorneyController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[AttorneyController::class, 'manage'])->name('manage');
    Route::post('/store',[AttorneyController::class,'store'])->name('store');
    Route::get('/list',[AttorneyController::class,'index'])->name('list');
    Route::delete('/destroy', [AttorneyController::class, 'destroy'])->name('destroy');
});

  # Article
  Route::prefix('article')->name('article.')->group(function(){
    Route::get('/create',[ArticleController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[ArticleController::class, 'manage'])->name('manage');
    Route::post('/store',[ArticleController::class,'store'])->name('store');
    Route::get('/list',[ArticleController::class,'index'])->name('list');
    Route::delete('/destroy', [ArticleController::class, 'destroy'])->name('destroy');
});


  # Partners
  Route::prefix('partners')->name('partners.')->group(function(){
    Route::get('/create',[PartnersController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[PartnersController::class, 'manage'])->name('manage');
    Route::post('/store',[PartnersController::class,'store'])->name('store');
    Route::get('/list',[PartnersController::class,'index'])->name('list');
    Route::delete('/destroy', [PartnersController::class, 'destroy'])->name('destroy');


  Route::prefix('{partner_id}/membership')->name('membership.')->group(function(){
    Route::get('/create',[ProfessionalMembershipController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[ProfessionalMembershipController::class, 'manage'])->name('manage');
    Route::post('/store',[ProfessionalMembershipController::class,'store'])->name('store');
    Route::get('/list',[ProfessionalMembershipController::class,'index'])->name('list');
    Route::delete('/destroy', [ProfessionalMembershipController::class, 'destroy'])->name('destroy');
});
  Route::prefix('{partner_id}/publication')->name('publication.')->group(function(){
    Route::get('/create',[PublicationController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[PublicationController::class, 'manage'])->name('manage');
    Route::post('/store',[PublicationController::class,'store'])->name('store');
    Route::get('/list',[PublicationController::class,'index'])->name('list');
    Route::delete('/destroy', [PublicationController::class, 'destroy'])->name('destroy');
});


  Route::prefix('{partner_id}/interview')->name('interview.')->group(function(){
    Route::get('/create',[InterviewController::class, 'create'])->name('create');
    Route::get('/manage/{id}',[InterviewController::class, 'manage'])->name('manage');
    Route::post('/store',[InterviewController::class,'store'])->name('store');
    Route::get('/list',[InterviewController::class,'index'])->name('list');
    Route::delete('/destroy', [InterviewController::class, 'destroy'])->name('destroy');
});

      Route::prefix('{partner_id}/accordian')->name('accordian.')->group(function(){
          Route::get('/create',[AccordianController::class, 'create'])->name('create');
          Route::get('/manage/{id}',[AccordianController::class, 'manage'])->name('manage');
          Route::post('/store',[AccordianController::class,'store'])->name('store');
          Route::get('/list',[AccordianController::class,'index'])->name('list');
          Route::delete('/destroy', [AccordianController::class, 'destroy'])->name('destroy');
      });


});


// site
// home
Route::get('/',[SiteController::class,'home']
)->name('home');

Route::get('/articles', function () {
    return view('site.articles');
})->name('articles');


Route::get('/lacreasta', function () {
    return view('site.lacreasta');
})->name('lacreasta');


Route::get('/investors', function () {
    return view('site.passiveinvestman');
})->name('investors');

Route::get('/articlesdetails', function () {
    return view('site.articlesdetails');
})->name('articlesdetails');


Route::get('/services', function () {
    return view('site.services');
})->name('services');


Route::get('/about', function () {
    return view('site.about');
})->name('about');


Route::get('/giaproject', function () {
    return view('site.giaproject');
})->name('giaproject');

Route::get('/armonia', function (){
    return view('site.armonia');
})->name('armonia');

Route::get('/kitiou', function (){
    return view('site.kitiou');
})->name('kitiou');

// current project nox residential arif
Route::get('/project-nox-residential',function(){
  return view('site.noxResidential');
})->name('project.nox.residential');
// current project alexandra arif
Route::get('/alexandra',function(){
  return view('site.alexandra');
})->name('alexandra');





Route::get('/partner-page',[SiteController::class,'partners']
)->name('partner-page');



Route::get('/partners', function () {
  return view('site.partners');
})->name('partners');


Route::get('/practice-area', function (){
  return view('site.practiceArea');
})->name('practiceArea');

//clientele
Route::get('/clientele', function () {
  return view('site.clientele');
})->name('clientele');

// trademark registration
Route::get('/trademark-registration', function () {
  return view('site.trademarkRegistration');
})->name('trademarkRegistration');

// our team
Route::get('/our-team', function () {
  return view('site.ourTeam');
})->name('ourTeam');

// contact
Route::get('/contact-us', function () {
  return view('site.contact');
})->name('contact');

Route::get('/business-registration', function () {
  return view('site.business-registration');
})->name('business-registration');

Route::get('/whyus', function () {
    return view('site.whyus');
})->name('whyus');



Route::get('/press', function () {
  return view('site.press');
})->name('press');
