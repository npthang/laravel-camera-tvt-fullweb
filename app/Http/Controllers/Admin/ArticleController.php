<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Translate;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function index()
    {
        // $articles = Article::all();
        $articles  = Article::leftJoin('translates', 'translates.appID', '=', 'articles.id')
            ->select(
                'articles.*', 
                'translates.appID', 
                'translates.appName',
                'translates.trans_id'
            )
            ->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(ArticleRequest $request)
    {
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/articles', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }

        Article::create($data);
        $request->session()->flash('success','Article was added successful!');

        return redirect()->route('adminArticles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);

        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/articles', $data['image']);
        }

        $article->update($data);
        $request->session()->flash('success','Article was updated successful!');

        return redirect()->route('adminArticles');
    }

    public function destroy(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        
        $translate1 = Translate::where('appID', $article->id)->first();
        $translate2 = Translate::where('trans_id', $article->id)->first();
        $translate1->delete();
        $translate2->delete();

        Article::destroy($id);
        $request->session()->flash('success',$article->name.' is deleted successfully!');

        return redirect()->route('adminArticles');
    }

    public function trans($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.trans', compact('article'));
    }

    public function translate(Request $request, $id)
    {
        // dd($request->all());

        $trans = new Article();
        $trans->name = $request->name;
        $trans->body = $request->body;
        $trans->language = $request->language;
        $trans->description = $request->description;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $trans->image = $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/articles', $data['image']);
        } else {
            $trans->image = $data['image-old'];
        }
        $trans->save();

        

        $translate = new Translate();
        $article = Article::findOrFail($id);
        $translate->appID = $article->id;
        $translate->language = $article->language;
        $translate->appName = 'Article';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        $translate->appID = $trans->id;
        $translate->language = $article->language;
        $translate->appName = 'Article';
        $translate->trans_id = $article->id;
        $translate->save();

        $request->session()->flash('success','Article was translate!');

        return redirect()->route('adminArticles');
    }
}
