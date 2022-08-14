<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partners;
use App\Helper\RedirectHelper;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;
use App\Models\ProfessionalMembership;

class ProfessionalMembershipController extends Controller
{

  public function index($partner_id = null)
  {
    if ($data['partner'] = Partners::find($partner_id)) {
      $data['data'] = ProfessionalMembership:: where('partner_id', $partner_id)->orderby('created_at', 'desc')->get();
      return view('admin.Partners.membership.list', $data);
    }
    return RedirectHelper::backWithWarning('<strong>Sorry!!!</strong> Partners not found');
  }


  public function manage($partner_id = null, $id = null)
  {
    if ($data['partner'] = Partners::find($partner_id)) {
      if ($data['membership'] = ProfessionalMembership::find($id)) {
        return view('admin.Partners.membership.manage', $data);
      }
      return RedirectHelper::backWithWarning('<strong>Sorry!!!</strong> Partners Membership not found');
    }
    return RedirectHelper::routeWarning('partners.list', '<strong>Sorry!!!</strong> Partners not found');
  }


  public function create($partner_id = null)
  {
    if ($data['partner'] = Partners::find($partner_id)) {
      return view('admin.Partners.membership.create', $data);
    }
    return RedirectHelper::backWithWarning('<strong>Sorry!!! </strong> Partner not found.');
  }


  public function store(Request $request, $partner_id = null)
  {
    $message = '<strong>Congratulations!!!</strong> Professional membership successfully ';
    if ($request->has('id')) {
      $partnership = ProfessionalMembership::find($request->id);
      $rules['title'] = 'required|string';
      $rules['short_description'] = 'required|string';
      $rules['link'] = 'nullable|string';
      $rules['status'] = ['required', 'string', Rule::in(ProfessionalMembership::$statusArray)];
      $message = $message . ' updated';
    } else {
      $partnership = new ProfessionalMembership();
      $rules['title'] = 'required|string';
      $rules['short_description'] = 'required|string';
      $rules['link'] = 'nullable|string';
      $rules['status'] = ['required', 'string', Rule::in(ProfessionalMembership::$statusArray)];;
      $message = $message . ' created';
    }
    $request->validate($rules);


    try {
      $partnership->partner_id = $partner_id;
      $partnership->title = $request->title;
      $partnership->short_description = $request->short_description;
      $partnership->link = $request->link;
      $partnership->status = $request->status;
      if ($partnership->save()) {
        if ($request->has('id')){
          return RedirectHelper::routeSuccessWithParams('partners.membership.list', "<strong>Congratulations!!!</strong> Membership updated.", [$partner_id]);
        }
        return RedirectHelper::back($message);
      }
      return RedirectHelper::backWithInput();
    } catch (QueryException $e) {
      return RedirectHelper::backWithInputFromException();
    }

  }

  public function destroy(Request $request, $partner_id = null)
  {
    $id = $request->post('id');
    try {
      $partnership = ProfessionalMembership::find($id);
      if ($partnership->delete()) {
        return 'success';
      }
    } catch (\Exception $e) {
    }
  }


  /**
   * @param Request $request
   * @return string|void
   */
  public function ajaxUpdateStatus(Request $request)
  {
    if ($request->isMethod("POST")) {
      $id = $request->post('id');
      $postStatus = $request->post('status');
      $status = strtolower($postStatus);
      $partnership = ProfessionalMembership::find($id);
      if ($partnership->update(['status' => $status])) {
        return "success";
      }
    }
  }


}
