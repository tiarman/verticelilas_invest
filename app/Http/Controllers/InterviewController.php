<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Models\Interview;
use App\Models\Partners;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InterviewController extends Controller
{

    public function index($partner_id = null)
    {
        if ($data['partner'] = Partners::find($partner_id)) {
            $data['data'] = Interview:: where('partner_id', $partner_id)->orderby('created_at', 'desc')->get();
            return view('admin.Partners.interview.list', $data);
        }
        return RedirectHelper::backWithWarning('<strong>Sorry!!!</strong> Interview not found');
    }


    public function manage($partner_id = null, $id = null)
    {
        if ($data['partner'] = Partners::find($partner_id)) {
            if ($data['interview'] = Interview::find($id)) {
                return view('admin.Partners.interview.manage', $data);
            }
            return RedirectHelper::backWithWarning('<strong>Sorry!!!</strong> Partners Membership not found');
        }
        return RedirectHelper::routeWarning('interview.list', '<strong>Sorry!!!</strong> Interviews not found');
    }


    public function create($partner_id = null)
    {
        if ($data['partner'] = Partners::find($partner_id)) {
            return view('admin.Partners.interview.create', $data);
        }
        return RedirectHelper::backWithWarning('<strong>Sorry!!! </strong> Partner not found.');
    }


    public function store(Request $request, $partner_id = null)
    {
        $message = '<strong>Congratulations!!!</strong> Professional membership successfully ';
        if ($request->has('id')) {
            $interview = Interview::find($request->id);
            $rules['link'] = 'nullable|string';
            $rules['type'] = ['required', 'string', Rule::in(Interview::$typeArray)];
            $rules['status'] = ['required', 'string', Rule::in(Interview::$statusArray)];
            $message = $message . ' updated';
        } else {
            $interview = new Interview();
            $rules['link'] = 'nullable|string';
            $rules['type'] = ['required', 'string', Rule::in(Interview::$typeArray)];
            $rules['status'] = ['required', 'string', Rule::in(Interview::$statusArray)];;
            $message = $message . ' created';
        }
        $request->validate($rules);


        try {
            $interview->partner_id = $partner_id;
            $interview->link = $request->link;
            $interview->type = $request->type;
            $interview->status = $request->status;
            if ($interview->save()) {
                if ($request->has('id')){
                    return RedirectHelper::routeSuccessWithParams('partners.interview.list', "<strong>Congratulations!!!</strong> Interview updated.", [$partner_id]);
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
            $interview = Interview::find($id);
            if ($interview->delete()) {
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
            $interview = Interview::find($id);
            if ($interview->update(['status' => $status])) {
                return "success";
            }
        }
    }

}
