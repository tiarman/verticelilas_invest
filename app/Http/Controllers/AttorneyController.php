<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Helper\CustomHelper;
use App\Helper\RedirectHelper;
use App\Models\Attorney;
use Illuminate\Database\QueryException;

use Illuminate\Http\Request;

class AttorneyController extends Controller
{
    public function index()
    {
      $data['data'] = Attorney::orderby('created_at', 'desc')->get();
      return view('admin.Attorney.list', $data);
    }


    //manage

  public function manage($id = null)
  {
    if ($data['attorney'] = Attorney::find($id)) {
      return view('admin.Attorney.manage', $data);
    }
    return RedirectHelper::routeWarning('attorney.list', '<strong>Sorry!!!</strong> Attorney not found');
  }

    public function create()
    {
      return view('admin.Attorney.create');
    }
    public function store(Request $request)
    {
      $message = '<strong>Congratulations!!!</strong> Attorney successfully ';
      if ($request->has('id')) {
        $attorney = Attorney::find($request->id);
        $rules['title'] = 'nullable|string';
        $rules['designation'] = 'nullable|string';
        $rules['link1'] = 'nullable|string';
        $rules['link2'] = 'nullable|string';
        $rules['link3'] = 'nullable|string';
        $rules['link4'] = 'nullable|string';
        $rules['image'] = 'nullable|file|mimes:png,jpg,jpeg,svg';
        $rules['status'] = ['required', 'string', Rule::in(\App\Models\Attorney::$statusArray)];
        $message = $message . ' updated';
      } else {
        $attorney = new Attorney();
        $rules['title'] = 'required|string';
        $rules['designation'] = 'required|string';
        $rules['link1'] = 'nullable|string';
        $rules['link2'] = 'nullable|string';
        $rules['link3'] = 'nullable|string';
        $rules['link4'] = 'nullable|string';
        $rules['image'] = 'required|file|mimes:png,jpg,jpeg,svg';
        $rules['status'] = ['required', 'string', Rule::in(Attorney::$statusArray)];;
        $message = $message . ' created';
      }
      $request->validate($rules);

      try {
        $attorney->title = $request->title;
        $attorney->designation = $request->designation;
        $attorney->link1 = $request->link1;
        $attorney->link2 = $request->link2;
        $attorney->link3 = $request->link3;
        $attorney->link4 = $request->link4;
        $attorney->status = $request->status;
        $oldImage = $attorney->image;
        if ($request->hasFile('image')) {
          $logo = CustomHelper::storeImage($request->file('image'), '/attorney/');
          if ($logo != false) {
            $attorney->image = $logo;
          }
        }
        if ($attorney->save()) {
          if ($oldImage !== null && isset($logo)) {
            CustomHelper::deleteFile($oldImage);
          }
          return RedirectHelper::routeSuccess('attorney.list', $message);
        }
        return RedirectHelper::backWithInput();
      } catch (QueryException $e) {
        return RedirectHelper::backWithInputFromException();
      }

    }


    public function destroy(Request $request) {
        $id = $request->post('id');
        try {
          $attorney = Attorney::find($id);
          $oldImage = $attorney->image;
          if ($attorney->delete()) {
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
          $attorney = Attorney::find($id);
          if ($attorney->update(['status' => $status])) {
            return "success";
          }
        }
      }
}
