<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Helper\CustomHelper;
use App\Helper\RedirectHelper;
use App\Models\Article;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
      $data['data'] = Article::orderby('created_at', 'desc')->get();
      return view('admin.Articles.list', $data);
    }


    //manage

  public function manage($id = null)
  {
    if ($data['article'] = Article::find($id)) {
      return view('admin.Articles.manage', $data);
    }
    return RedirectHelper::routeWarning('article.list', '<strong>Sorry!!!</strong> Article not found');
  }

    public function create()
    {
      return view('admin.Articles.create');
    }
    public function store(Request $request)
    {
      $message = '<strong>Congratulations!!!</strong> Team successfully ';
      if ($request->has('id')) {
        $article = Article::find($request->id);
        $rules['title'] = 'nullable|string';
        $rules['description'] = 'nullable|string';
        $rules['status'] = ['required', 'string', Rule::in(\App\Models\Article::$statusArray)];
        $message = $message . ' updated';
      } else {
        $article = new Article();
        $rules['title'] = 'required|string';
        $rules['description'] = 'required|string';
        $rules['status'] = ['required', 'string', Rule::in(Article::$statusArray)];
        $message = $message . ' created';
      }
      $request->validate($rules);

      try {
        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = $request->status;
          if ($article->save()) {
            return RedirectHelper::routeSuccess('article.list', $message);
          }
          return RedirectHelper::backWithInput();
        } catch (QueryException $e) {
          return RedirectHelper::backWithInputFromException();
        }

      }


    public function destroy(Request $request) {
        $id = $request->post('id');
        try {
          $article = Article::find($id);
          $oldImage = $article->image;
          if ($article->delete()) {
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
          $article = Article::find($id);
          if ($article->update(['status' => $status])) {
            return "success";
          }
        }
      }
}
