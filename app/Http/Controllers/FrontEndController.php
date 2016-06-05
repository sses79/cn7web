<?php

namespace App\Http\Controllers;

use App\News;
use App\Phone;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int $id
     * @return Response
     */
    public function showTimeline()
    {
        return view('timeline', ['news' => News::where('id', '>', 0)->orderBy('created_at', 'desc')->get()]);
    }

    public function showFeature()
    {
        return view('feature');
    }

    public function showPortfolio()
    {
        return view('portfolio', ['phones' => Phone::where('id', '>', 1)->take(18)->get()->chunk(6)]);
    }

    public function showFrontEndView($name = null)
    {
        return View('welcome');
    }
}
