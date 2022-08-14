<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller {
  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function index() {
    $data['users'] = User::orderby('id', 'desc')->paginate(2);
    return view('admin.user.list', $data);
  }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function create() {
    return view('admin.user.create');
  }


  public function manage($id = null) {
    if ($data['user'] = User::find($id)) {
      return view('admin.user.manage', $data);
    }
    return RedirectHelper::routeWarning('admin.user.list', '<strong>Sorry!!!</strong> User not found');
  }


  public function view($id = null) {
    if ($data['user'] = User::find($id)) {
      return view('admin.user.view', $data);
    }
    return RedirectHelper::routeWarning('admin.user.list', '<strong>Sorry!!!</strong> User not found');
  }


  public function store(Request $request) {
    $message = '<strong>Congratulations!!!</strong> User successfully';
    $rules = [
      'name' => 'required|string',
      'password' => 'required|string|min:' . User::$minimumLength,
      'status' => ['required', Rule::in(User::$statusArray)],
    ];
    if ($request->has('id')) {
      $user = User::find($request->id);
      $rules['email'] = 'required|email|unique:' . with(new User)->getTable() . ',email,' . $request->id;
      $rules['phone'] = 'required|string|min:11|max:11|unique:' . with(new User)->getTable() . ',phone,' . $request->id;
      $rules['password'] = 'nullable|string|min:' . User::$minimumLength;
      $message = $message . ' updated';
    } else {
      $user = new User();
      $rules['email'] = 'required|email|unique:' . with(new User)->getTable() . ',email';
      $rules['phone'] = 'required|string|min:11|max:11|unique:' . with(new User)->getTable() . ',phone';
      $message = $message . ' created';
    }
    $request->validate($rules);

    try {
      $user->name = $request->name;
      $user->email = $request->email;
      $user->phone = $request->phone;
      if ($request->password) {
        $user->password = bcrypt($request->password);
      }
      $user->status = strtolower($request->status);
      if ($user->save()) {
        return RedirectHelper::routeSuccess('user.list', $message);
      }
      return RedirectHelper::backWithInput();
    } catch (QueryException $e) {
      return RedirectHelper::backWithInputFromException();
    }

  }

  public function destroy(Request $request) {
    $id = $request->post('id');
    try {
      $user = User::find($id);
      if ($user->delete()) {
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
      $user = User::find($id);
      if ($user->update(['status' => $status])) {
        return "success";
      }
    }
  }
}
