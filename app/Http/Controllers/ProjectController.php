<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Article;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $congtrinh = Article::find(69);

        return view('projects', compact('projects', 'congtrinh'));
    }

    public function detail($lang, $slug)
    {
        $project = Project::where('slug', $slug)->first();
        // $news = News::where('id', '<>', $new->id)->take(4)->get();
        return view('detail-project', compact('project'));
    }
}
