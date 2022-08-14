<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Models\Accordian;
use App\Models\Partners;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccordianController extends Controller
{
    public function index($partner_id = null)
    {
        if ($data['partner'] = Partners::find($partner_id)) {
            $data['data'] = Accordian:: where('partner_id', $partner_id)->orderby('created_at', 'desc')->get();
            return view('admin.Partners.partnersaccordian.list', $data);
        }
        return RedirectHelper::backWithWarning('<strong>Sorry!!!</strong> Accordian not found');
    }


    public function manage($partner_id = null, $id = null)
    {
        if ($data['partner'] = Partners::find($partner_id)) {
            if ($data['accordian'] = Accordian::find($id)) {
                return view('admin.Partners.partnersaccordian.manage', $data);
            }
            return RedirectHelper::backWithWarning('<strong>Sorry!!!</strong> Partners Membership not found');
        }
        return RedirectHelper::routeWarning('accordian.list', '<strong>Sorry!!!</strong> Accordians not found');
    }


    public function create($partner_id = null)
    {
        if ($data['partner'] = Partners::find($partner_id)) {
            return view('admin.Partners.partnersaccordian.create', $data);
        }
        return RedirectHelper::backWithWarning('<strong>Sorry!!! </strong> Partner not found.');
    }


    public function store(Request $request, $partner_id = null)
    {
        $message = '<strong>Congratulations!!!</strong> Professional membership successfully ';
        if ($request->has('id')) {
            $accordian = Accordian::find($request->id);
            $rules['title'] = 'nullable|string';
            $rules['description'] = 'nullable';
            $rules['status'] = ['required', 'string', Rule::in(Accordian::$statusArray)];
            $message = $message . ' updated';
        } else {
            $accordian = new Accordian();
            $rules['title'] = 'nullable|string';
            $rules['description'] = 'nullable';
            $rules['status'] = ['required', 'string', Rule::in(Accordian::$statusArray)];;
            $message = $message . ' created';
        }
        $request->validate($rules);


        try {
            $accordian->partner_id = $partner_id;
            $accordian->title = $request->title;
            $accordian->description = $request->description;
            $accordian->status = $request->status;
            if ($accordian->save()) {
                if ($request->has('id')){
                    return RedirectHelper::routeSuccessWithParams('partners.accordian.list', "<strong>Congratulations!!!</strong> Accordian updated.", [$partner_id]);
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
            $accordian = Accordian::find($id);
            if ($accordian->delete()) {
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
            $accordian = Accordian::find($id);
            if ($accordian->update(['status' => $status])) {
                return "success";
            }
        }
    }
}
