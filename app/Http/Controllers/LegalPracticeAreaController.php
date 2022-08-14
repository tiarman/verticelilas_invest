<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Models\LegalPracticeArea;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LegalPracticeAreaController extends Controller
{
    //
    public function create() {
      
        return view('admin.home.legalPracticeArea.create');
      }

      public function index()
      {
        $data['data'] = LegalPracticeArea::orderby('created_at', 'desc')->get();
        return view('admin.home.legalPracticeArea.view', $data);
      }
    
      public function store(Request $request)
      {
        $message = 'Successfully ';
        

        // start exact
        if ($request->has('id')) {
          $legalPracticeArea = LegalPracticeArea::find($request->id);
          $rules['title'] = 'nullable|string';
          $rules['description'] = 'nullable|string';
          $rules['status'] = ['required', 'string', Rule::in(\App\Models\LegalPracticeArea::$statusArray)];
          $message = $message . ' updated';
        }

        else {
          $legalPracticeArea = new LegalPracticeArea();
          $rules['title'] = 'required|string';
          $rules['description'] = 'required|string';
          
          $rules['status'] = ['required', 'string', Rule::in(LegalPracticeArea::$statusArray)];
          $message = $message . ' created';
  
        }
        $request->validate($rules);
        
  // end exact
        
    
        try {
    
          $legalPracticeArea->title = $request['title'];
          $legalPracticeArea->description = $request['description'];
          $legalPracticeArea->status = $request['status'];
         
    
          if ($legalPracticeArea->save()) {
            
            if ($request->has('id')){
              return RedirectHelper::routeSuccess('legal.practice.area.view', $message);
            }
            return RedirectHelper::routeSuccess('legal.practice.area.view', $message);
            return RedirectHelper::back($message);
          }
        
          return RedirectHelper::backWithInput();
        } catch (QueryException $e) {
          return RedirectHelper::backWithInputFromException();
        }
      }
    
      public function manage($id = null)
      {
        if (!($data['datas'] = LegalPracticeArea::find($id))) {
          return RedirectHelper::routeWarning('legal.practice.area.view', '<strong>Sorry!!!</strong> Not found');
        }
        return view('admin.home.legalPracticeArea.manage', $data);
      }
    
    
      public function destroy(Request $request) {
        $id = $request->post('id');
        try {
          $whoWeAre = LegalPracticeArea::find($id);
         
          if ($whoWeAre->delete()) {
            
            return 'success';
          }
        } catch (\Exception $e) {
        }
      }


      public function ajaxUpdateStatus(Request $request) {
        if ($request->isMethod("POST")) {
          $id = $request->post('id');
          $postStatus = $request->post('status');
          $status = strtolower($postStatus);
          $legalPracticeArea = LegalPracticeArea::find($id);
          if ($legalPracticeArea->update(['status' => $status])) {
            return "success";
          }
        }
      }

    
    }


