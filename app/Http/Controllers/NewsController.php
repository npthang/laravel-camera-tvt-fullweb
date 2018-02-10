<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news', compact('news'));
    }

    public function detail($lang, $slug)
    {
        $new = News::where('slug', $slug)->first();
        $news = News::where('id', '<>', $new->id)->take(4)->get();
        return view('detail-new', compact('new', 'news'));
    }
}
