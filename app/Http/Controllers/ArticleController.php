<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function about_us()
    {
        $article = Article::findOrFail(54);
        return view('articles.about-us', compact('article'));
    }

    public function policy()
    {
        $article = Article::find(55);
        return view('articles.policy', compact('article'));
    }

    // public function project()
    // {
    //     $article = Article::find(69);
    //     return view('articles.policy', compact('article'));
    // }

    public function detail($lang, $slug)
    {
        // $certification  = Article::find(68);
        // $hoptac  = Article::find(67);
        // $lienhe  = Article::find(66);
        $article = Article::where('slug', $slug)->first();
        // $news = News::where('id', '<>', $new->id)->take(4)->get();
        return view('detail-article', compact('article'));
    }
}
