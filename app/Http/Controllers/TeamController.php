<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Helper\CustomHelper;
use App\Helper\RedirectHelper;
use App\Models\Team;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
      $data['data'] = Team::orderby('created_at', 'desc')->get();
      return view('admin.Teams.list', $data);
    }


    //manage

  public function manage($id = null)
  {
    if ($data['team'] = Team::find($id)) {
      return view('admin.Teams.manage', $data);
    }
    return RedirectHelper::routeWarning('team.list', '<strong>Sorry!!!</strong> Team not found');
  }

    public function create()
    {
      return view('admin.Teams.create');
    }
    public function store(Request $request)
    {
      $message = '<strong>Congratulations!!!</strong> Team successfully ';
      if ($request->has('id')) {
        $team = Team::find($request->id);
        $rules['name'] = 'nullable|string';
        $rules['designation'] = 'nullable|string';
        $rules['description'] = 'nullable|string';
        $rules['image'] = 'nullable|file|mimes:png,jpg,jpeg,svg';
        $rules['type'] = ['required', 'string', Rule::in(\App\Models\Team::$typeArray)];
        $rules['status'] = ['required', 'string', Rule::in(\App\Models\Team::$statusArray)];
        $message = $message . ' updated';
      } else {
        $team = new Team();
        $rules['name'] = 'required|string';
        $rules['designation'] = 'required|string';
        $rules['description'] = 'required|string';
        $rules['image'] = 'required|file|mimes:png,jpg,jpeg,svg';
        $rules['type'] = ['nullable', 'string', Rule::in(\App\Models\Team::$typeArray)];
        $rules['status'] = ['required', 'string', Rule::in(Team::$statusArray)];
        $message = $message . ' created';
      }
      $request->validate($rules);

      try {
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->description = $request->description;
        $team->type = $request->type;
        $team->status = $request->status;
        $oldImage = $team->image;
        if ($request->hasFile('image')) {
          $logo = CustomHelper::storeImage($request->file('image'), '/team/');
          if ($logo != false) {
            $team->image = $logo;
          }
        }
        if ($team->save()) {
          if ($oldImage !== null && isset($logo)) {
            CustomHelper::deleteFile($oldImage);
          }
          return RedirectHelper::routeSuccess('team.list', $message);
        }
        return RedirectHelper::backWithInput();
      } catch (QueryException $e) {
        return RedirectHelper::backWithInputFromException();
      }

    }


    public function destroy(Request $request) {
        $id = $request->post('id');
        try {
          $user = team::find($id);
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
          $user = Team::find($id);
          if ($user->update(['status' => $status])) {
            return "success";
          }
        }
      }
}
