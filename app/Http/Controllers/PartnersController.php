<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Helper\CustomHelper;
use App\Helper\RedirectHelper;
use App\Models\Partners;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
      $data['data'] = Partners::orderby('created_at', 'desc')->get();
      return view('admin.Partners.list', $data);
    }


    //manage

  public function manage($id = null)
  {
    if ($data['partners'] = Partners::find($id)) {
      return view('admin.Partners.manage', $data);
    }
    return RedirectHelper::routeWarning('partners.list', '<strong>Sorry!!!</strong> Partners not found');
  }

    public function create()
    {
      return view('admin.Partners.create');
    }


    public function store(Request $request)
    {

      $message = '<strong>Congratulations!!!</strong> partners successfully ';
      if ($request->has('id')) {
        $partners = Partners::find($request->id);
        $rules['name'] = 'nullable|string';
          $rules['description'] = 'required';
        $rules['biography'] = 'nullable|string';
        $rules['life_sketch'] = 'nullable|string';
        $rules['qualifications'] = 'nullable|string';
        $rules['image'] = 'nullable|file|mimes:png,jpg,jpeg,svg';
        $rules['status'] = ['required', 'string', Rule::in(\App\Models\Partners::$statusArray)];
        $message = $message . ' updated';
      } else {
        $partners = new Partners();
        $rules['name'] = 'required|string';
        $rules['description'] = 'required';
        $rules['biography'] = 'required|string';
        $rules['life_sketch'] = 'required|string';
        $rules['qualifications'] = 'required|string';
        $rules['image'] = 'required|file|mimes:png,jpg,jpeg,svg';
        $rules['status'] = ['required', 'string', Rule::in(Partners::$statusArray)];;
        $message = $message . ' created';
      }
      $request->validate($rules);


      try {
        $partners->name = $request->name;
          $partners->description = $request->description;
        $partners->biography = $request->biography;
        $partners->life_sketch = $request->life_sketch;
        $partners->qualifications = $request->qualifications;
        $partners->status = $request->status;
        $oldImage = $partners->image;
        if ($request->hasFile('image')) {
          $logo = CustomHelper::storeImage($request->file('image'), '/partners/');

          if ($logo != false) {
            $partners->image = $logo;
          }
        }
        if ($partners->save()) {


          if ($oldImage !== null && isset($logo)) {
            CustomHelper::deleteFile($oldImage);
          }
          return RedirectHelper::routeSuccess('partners.list', $message);
        }
        return RedirectHelper::backWithInput();
      } catch (QueryException $e) {

        return RedirectHelper::backWithInputFromException();
      }

    }


    public function destroy(Request $request) {
        $id = $request->post('id');
        try {
          $partners = Partners::find($id);
          $oldImage = $partners->image;
          if ($partners->delete()) {
            if ($oldImage !== null) {
              CustomHelper::deleteFile($oldImage);
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
        if ($request->isMethod("POST")) {
          $id = $request->post('id');
          $postStatus = $request->post('status');
          $status = strtolower($postStatus);
          $partners = Partners::find($id);
          if ($partners->update(['status' => $status])) {
            return "success";
          }
        }
      }
}
