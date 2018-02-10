<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Translate;

class VideoController extends Controller
{
    public function index()
    {
        // $videos = Video::all();
        $videos  = Video::leftJoin('translates', 'translates.appID', '=', 'videos.id')
            ->select(
                'videos.*', 
                'translates.appID', 
                'translates.appName',
                'translates.trans_id'
            )
            ->get();

        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|unique:countries|max:255',
        // ]);

        Video::create($request->all());
        
        return redirect()->route('adminVideos');
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'name' => 'required|unique:countries,name,'.$id,
        // ]);

        $video = Video::findOrFail($id);
        $video->update($request->all());
        return redirect()->route('adminVideos');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);

        $translate1 = Translate::where('appID', $video->id)->first();
        $translate2 = Translate::where('trans_id', $video->id)->first();
        $translate1->delete();
        $translate2->delete();

        Video::destroy($id);
        return redirect()->route('adminVideos');
    }

    public function trans($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.videos.trans', compact('video'));
    }

    public function translate(Request $request, $id)
    {
        // dd($request->all());

        $trans = new Video();
        $trans->title = $request->title;
        $trans->url = $request->url;
        $trans->language = $request->language;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $trans->image = $data['image'] = str_slug(Carbon::now().'_'.$data['title'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/blocks', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        $trans->save();

        

        $translate = new Translate();
        $video = Video::findOrFail($id);
        $translate->appID = $video->id;
        $translate->language = $video->language;
        $translate->appName = 'Video';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        $translate->appID = $trans->id;
        $translate->language = $video->language;
        $translate->appName = 'Video';
        $translate->trans_id = $video->id;
        $translate->save();

        $request->session()->flash('success','Video was translate!');

        return redirect()->route('adminVideos');
    }
}
