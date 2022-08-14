<?php

namespace App\Http\Controllers;

use App\Helper\CustomHelper;
use App\Helper\RedirectHelper;
use App\Models\Partners;
use App\Models\Publication;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PublicationController extends Controller
{

  public function index($partner_id = null)
  {

  $data['data'] = Publication::where('partner_id', $partner_id)-> orderby('created_at', 'desc')->get();
    return view('admin.Partners.publication.list', $data);
  }

    public function create($partner_id = null)
    {
        if($data['partner'] = Partners::find($partner_id)){
            return view('admin.Partners.publication.create', $data);
        }
    }

    //manage

  public function manage($partner_id=null, $id = null)
  {
   if($data['partner'] = Partners::find($partner_id)){
    if ($data['publication'] = Publication::find($id)) {
      return view('admin.partners.publication.manage', $data);
    }
    return RedirectHelper::backWithWarning('<strong>Sorry!!!</strong> Partners publication not found');
  }
  return RedirectHelper::routeWarning('partners.list', '<strong>Sorry!!!</strong> Partners not found');
  }

  public function store(Request $request, $partner_id=null)
  {
    $message = '<strong>Congratulations!!!</strong> partners successfully ';
    // return $request;
    if ($request->has('id')) {

      $publications = Publication::find($request->id);
      $rules['name'] = 'nullable|string';
      $rules['link'] = 'nullable|string';
      $rules['image'] = 'nullable|file|mimes:png,jpg,jpeg,svg';
      $rules['file'] = 'nullable|file|mimes:pdf,docx,txt';
      $rules['status'] = ['required', 'string', Rule::in(\App\Models\Publication::$statusArray)];
      $message = $message . ' updated';
    } else {
      $publications = new Publication();
      $rules['name'] = 'nullable|string';
      $rules['link'] = 'nullable|string';
      $rules['image'] = 'nullable|file|mimes:png,jpg,jpeg,svg';
      $rules['file'] = 'nullable|file|mimes:pdf,docx';
      $rules['status'] = ['required' ,'string', Rule::in(\App\Models\Publication::$statusArray)];
      $message = $message . ' created';
    }
    $request->validate($rules);


    try {
      $publications->partner_id=$partner_id;
      $publications->name = $request->name;
      $publications->link = $request->link;
      $publications->status = $request->status;
      $oldImage = $publications->image;
      $oldFile = $publications->file;
      if ($request->hasFile('image')) {
        $logo = CustomHelper::storeImage($request->file('image'), '/partners/publications/');

        if ($logo != false) {
          $publications->image = $logo;
        }
      }
      if ($request->hasFile('file')) {
        $file = CustomHelper::storeImage($request->file('file'), '/partners/publications/');

        if ($file != false) {
          $publications->file = $file;
        }
      }
      if ($publications->save()) {


        if ($oldImage !== null && isset($logo)) {
          CustomHelper::deleteFile($oldImage);
        }
        // this is for file
        if ($oldFile !== null && isset($file)) {
          CustomHelper::deleteFile($oldFile);
        }
        if($request->has('id')){
          return  RedirectHelper::routeSuccessWithParams('partners.publication.list',"<strong>Congratulations!!!</strong> Membership updated.",[$partner_id]);
        }
        return RedirectHelper::back($message);
      }
      return RedirectHelper::backWithInput();
    } catch (QueryException $e) {
return $e;
      return RedirectHelper::backWithInputFromException();
    }

  }


  public function destroy(Request $request, $partner_id=null) {
      $id = $request->post('id');
      try {
        $publication = Publication::find($id);
        $oldImage = $publication->image;
        $oldFile = $publication->file;
        if ($publication->delete()) {
          if ($oldImage !== null) {
            CustomHelper::deleteFile($oldImage);
          }
          if ($oldFile !== null) {
            CustomHelper::deleteFile($oldFile);
          }
          return 'success';
        }
      } catch (\Exception $e) {
      }
    }


    /**
     * @param Request $request
     * @return string|void
     */
    public function ajaxUpdateStatus(Request $request) {
      // return 'test';
      if ($request->isMethod("POST")) {
        $id = $request->post('id');
        $postStatus = $request->post('status');
        $status = strtolower($postStatus);
        $publication = Publication::find($id);
        if ($publication->update(['status' => $status])) {
          return "success";
        }
      }
    }
}
