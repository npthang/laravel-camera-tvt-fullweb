<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Translate;
use App\Http\Requests\NewsRequest;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        // $news = News::all();
        $news  = News::leftJoin('translates', 'translates.appID', '=', 'news.id')
            ->select(
                'news.*',
                'translates.appID',
                'translates.appName',
                'translates.trans_id'
            )->get();
            
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['image'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/news', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        // dd($request);

        News::create($data);
        $request->session()->flash('success','News was added successful!');

        return redirect()->route('adminNews');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(NewsRequest $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['image'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/news', $data['image']);
        }

        $news = News::findOrFail($id);
        $news->update($data);
        // dd($news->description);
        $request->session()->flash('success','News was updated successful!');

        return redirect()->route('adminNews');
    }

    public function destroy(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $translate1 = Translate::where('appID', $news->id)->first();
        $translate2 = Translate::where('trans_id', $news->id)->first();
        $translate1->delete();
        $translate2->delete();

        News::destroy($id);
        $request->session()->flash('success',$news->title.' is deleted successfully!');

        return redirect()->route('adminNews');
    }

    public function trans($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.trans', compact('news'));
    }

    public function translate(Request $request, $id)
    {
        $trans = new News();
        $trans->title = $request->title;
        $trans->content = $request->content;
        $trans->language = $request->language;
        $trans->description = $request->description;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $trans->image = $data['image'] = str_slug(Carbon::now().'_'.$data['title'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/blocks', $data['image']);
        } else {
            $trans->image = $data['image-old'];
        }
        $trans->save();

        

        $translate = new Translate();
        $news = News::findOrFail($id);
        $translate->appID = $news->id;
        $translate->language = $news->language;
        $translate->appName = 'News';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        $translate->appID = $trans->id;
        $translate->language = $news->language;
        $translate->appName = 'News';
        $translate->trans_id = $news->id;
        $translate->save();

        $request->session()->flash('success','News was translate!');

        return redirect()->route('adminNews');
    }
}
