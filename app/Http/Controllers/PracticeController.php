<?php

namespace App\Http\Controllers;

use App\Helper\CustomHelper;
use App\Helper\RedirectHelper;
use App\Models\Practice;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PracticeController extends Controller
{


    public function index()
    {
      $data['data'] = Practice::orderby('created_at', 'desc')->get();
      return view('admin.PracticeArea.view', $data);
    }


    //manage

  public function manage($id = null)
  {
    if ($data['practice'] = Practice::find($id)) {
      return view('admin.PracticeArea.manage', $data);
    }
    return RedirectHelper::routeWarning('PracticeArea.view', '<strong>Sorry!!!</strong> Practice Area not found');
  }

    public function create()
    {
      return view('admin.PracticeArea.create');
    }
    public function store(Request $request)
    {
      $message = '<strong>Congratulations!!!</strong> Practice Area successfully ';
      if ($request->has('id')) {
        $practice = Practice::find($request->id);
        $rules['title'] = 'nullable|string';
        $rules['description'] = 'nullable|string';
        $rules['image'] = 'nullable|file|mimes:png,jpg,jpeg,svg';
        $rules['status'] = ['required', 'string', Rule::in(\App\Models\Practice::$statusArray)];
        $message = $message . ' updated';
      } else {
       
        $practice = new Practice();
        $rules['title'] = 'required|string';
        $rules['description'] = 'required|string';
        $rules['image'] = 'required|file|mimes:png,jpg,jpeg,svg';
        $rules['status'] = ['required', 'string', Rule::in(Practice::$statusArray)];;
        $message = $message . ' created';
      }
      $request->validate($rules);

      try {
        $practice->title = $request->title;
        $practice->description = $request->description;
        $practice->status = $request->status;
        $oldImage = $practice->image;
        if ($request->hasFile('image')) {
          $logo = CustomHelper::storeImage($request->file('image'), '/practice/');
          if ($logo != false) {
            $practice->image = $logo;
          }
        }
        if ($practice->save()) {
          if ($oldImage !== null && isset($logo)) {
            CustomHelper::deleteFile($oldImage);
          }
          return RedirectHelper::routeSuccess('practice.area.view', $message);
        }
        return RedirectHelper::backWithInput();
      } catch (QueryException $e) {
        return RedirectHelper::backWithInputFromException();
      }

    }


    public function destroy(Request $request) {
        $id = $request->post('id');
        try {
          $practice = Practice::find($id);
          $oldImage = $practice->image;
          if ($practice->delete()) {
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
          $user = Practice::find($id);
          if ($user->update(['status' => $status])) {
            return "success";
          }
        }
      }
}
