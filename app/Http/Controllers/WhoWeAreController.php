<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Helper\CustomHelper;
use App\Models\WhoWeAre;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
  public function create()
  {
    return view('admin.home.WhoWeAre.create');
  }

  public function index()
  {
    $data['datas'] = WhoWeAre::all();
    return view('admin.home.WhoWeAre.view', $data);
  }

  public function store(Request $request)
  {
    $message = 'Successfully ';
    $rules = [
      'sub_title_en' => "required|string",
      'description_en' => "required|string",
      'image_en' => "required|mimes:jpeg,png,jpg",
      'sub_title_bn' => "required|string",
      'description_bn' => "required|string",
      'image_bn' => "required|mimes:jpeg,png,jpg",
    ];

    if ($request->has('id')) {
      $whoWeAre = WhoWeAre::find($request->id);
      $rules['image_en'] = "nullable|mimes:jpeg,png,jpg";
      $rules['image_bn'] = "nullable|mimes:jpeg,png,jpg";
      $message = $message . ' updated!';
    } else {
      if (!($whoWeAre = WhoWeAre::first())){
        $whoWeAre = new WhoWeAre();
      }
      $message = $message . ' created!';
    }

    $data = $request->validate($rules);

    try {

      $whoWeAre->sub_title_en = $data['sub_title_en'];
      $whoWeAre->description_en = $data['description_en'];

      $whoWeAre->sub_title_bn = $data['sub_title_bn'];
      $whoWeAre->description_bn = $data['description_bn'];

      $oldImage_en = $whoWeAre->image_en;
      $oldImage_bn = $whoWeAre->image_bn;
      

      if ($request->hasFile('image_en')) {
        $logoEn = CustomHelper::storeImage($request->file('image_en'), '/who_we_are/en/');
        if ($logoEn != false) {
          $whoWeAre->image_en = $logoEn;
        }
      }
      if ($request->hasFile('image_bn')) {
        $logoBN = CustomHelper::storeImage($request->file('image_bn'), '/who_we_are/bn/');
        if ($logoBN != false) {
          $whoWeAre->image_bn = $logoBN;
        }
      }

      if ($whoWeAre->save()) {
        if ($oldImage_en !== null && isset($logoEn)) {
          CustomHelper::deleteFile($oldImage_en);
        }
        if ($oldImage_bn !== null && isset($logoBn)) {
          CustomHelper::deleteFile($oldImage_bn);
        }
        if ($request->has('id')){
          return RedirectHelper::routeSuccess('who.we.are.view', $message);
        }
        return RedirectHelper::routeSuccess('who.we.are.view', $message);
        return RedirectHelper::back($message);
      }
      return RedirectHelper::backWithInput();
    } catch (QueryException $e) {
      return RedirectHelper::backWithInputFromException();
    }
  }

  public function manage($id = null)
  {
    if (!($data['data'] = WhoWeAre::find($id))) {
      return RedirectHelper::routeWarning('who.we.are.view', '<strong>Sorry!!!</strong> Not found');
    }
    return view('admin.home.WhoWeAre.manage', $data);
  }


  public function destroy(Request $request) {
    $id = $request->post('id');
    try {
      $whoWeAre = WhoWeAre::find($id);
      $oldPhotoBN = $whoWeAre->image_bn;
      $oldPhotoEN = $whoWeAre->image_en;
      if ($whoWeAre->delete()) {
        if ($oldPhotoBN !== null ) {
          CustomHelper::deleteFile($oldPhotoBN);
        }
        if ($oldPhotoEN !== null ) {
          CustomHelper::deleteFile($oldPhotoEN);
        }
        return 'success';
      }
    } catch (\Exception $e) {
    }
  }

}
