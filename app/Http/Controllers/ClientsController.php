<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Helper\CustomHelper;
use App\Helper\RedirectHelper;
use App\Models\Clients;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ClientsController extends Controller
{


    public function index()
    {
      $data['data'] = Clients::orderby('created_at', 'desc')->get();
      return view('admin.ClientsSays.list', $data);
    }


    //manage

  public function manage($id = null)
  {
    if ($data['clients'] = Clients::find($id)) {
      return view('admin.ClientsSays.manage', $data);
    }
    return RedirectHelper::routeWarning('clients.list', '<strong>Sorry!!!</strong> Clients not found');
  }

    public function create()
    {
      return view('admin.ClientsSays.create');
    }
    public function store(Request $request)
    {
      $message = '<strong>Congratulations!!!</strong> Clients successfully ';
      if ($request->has('id')) {
        $Clients = Clients::find($request->id);
        $rules['title'] = 'nullable|string';
        $rules['description'] = 'nullable|string';
        $rules['designation'] = 'nullable|string';
        $rules['image'] = 'nullable|file|mimes:png,jpg,jpeg,svg';
        $rules['status'] = ['required', 'string', Rule::in(\App\Models\Clients::$statusArray)];
        $message = $message . ' updated';
      } else {
        $Clients = new Clients();
        $rules['title'] = 'required|string';
        $rules['description'] = 'required|string';
        $rules['designation'] = 'required|string';
        $rules['image'] = 'required|file|mimes:png,jpg,jpeg,svg';
        $rules['status'] = ['required', 'string', Rule::in(Clients::$statusArray)];;
        $message = $message . ' created';
      }
      $request->validate($rules);

      try {
        $Clients->title = $request->title;
        $Clients->description = $request->description;
        $Clients->designation = $request->designation;
        $Clients->status = $request->status;
        $oldImage = $Clients->image;
        if ($request->hasFile('image')) {
          $logo = CustomHelper::storeImage($request->file('image'), '/Clients/');
          if ($logo != false) {
            $Clients->image = $logo;
          }
        }
        if ($Clients->save()) {
          if ($oldImage !== null && isset($logo)) {
            CustomHelper::deleteFile($oldImage);
          }
          return RedirectHelper::routeSuccess('clients.list', $message);
        }
        return RedirectHelper::backWithInput();
      } catch (QueryException $e) {
        return RedirectHelper::backWithInputFromException();
      }

    }


    public function destroy(Request $request) {
        $id = $request->post('id');
        try {
          $user = Clients::find($id);
          $oldImage = $user->image;
          if ($user->delete()) {
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
          $user = Clients::find($id);
          if ($user->update(['status' => $status])) {
            return "success";
          }
        }
      }
}
