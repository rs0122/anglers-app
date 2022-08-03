<?php

namespace App\Http\Controllers\FishArticle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FishArticle\CreateRequest;
use App\Models\FishArticle;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        //魚の記事を登録する処理
        $fish_article = new FishArticle;
        // TODO Auth機能実装まで統一して1を登録。
        $fish_article->user_id = 1;
        $fish_article->content = $request->fish_article();
        $fish_article->save();
        return redirect()->route('fish_article.index');
    }
}
