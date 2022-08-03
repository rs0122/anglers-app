<?php

namespace App\Http\Controllers\FishArticle;

use App\Http\Controllers\Controller;
use App\Models\FishArticle;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $fish_articles = FishArticle::all();
        $fish_articles = FishArticle::orderBy('created_at', 'DESC')->get();
        return view('fish_article.index')->with('fish_articles', $fish_articles);
    }
}
