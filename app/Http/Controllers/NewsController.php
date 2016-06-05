<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\BlogCommentRequest;
use App\News;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Sentinel;
use Response;


class NewsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        // Grab all the blogs
        $newses = News::all();
        // Show the page
        return View('backend.news.index', compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate(NewsRequest $request)
    {
        $news = new News($request->only('title', 'content'));

//        $news->user_id = Sentinel::getUser()->id;
        $news->imageUrl = 'computing-cloud.png';
        $news->save();

        return redirect('backend/news');
    }

    public function getEdit(News $news)
    {
        return view('backend.news.edit', compact('news'));
    }

    public function postEdit(NewsRequest $request, News $news)
    {
        $news->update($request->only('title', 'content'));
        return redirect('backend/news');
    }

    /**
     * Remove blog.
     *
     * @param $news
     * @return Response
     */
    public function getModalDelete(News $news)
    {
        $model = 'news';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('delete/news', ['id' => $news->id]);
            return View('backend/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = trans('blog/message.error.delete', compact('id'));
            return View('backend/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function getDelete(News $news)
    {
        $news->delete();
        return redirect('backend/news');
    }

}
