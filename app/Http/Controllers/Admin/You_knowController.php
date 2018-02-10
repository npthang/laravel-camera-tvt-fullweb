<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\You_know;
use App\Translate;

class You_knowController extends Controller
{
    public function index()
    {
        // $youknows = You_know::all();
        $youknows  = You_know::leftJoin('translates', 'translates.appID', '=', 'you-knows.id')
            ->select(
                'you-knows.*',
                'translates.appID',
                'translates.appName',
                'translates.trans_id'
            )
            ->get();

        return view('admin.you_knows.index', compact('youknows'));
    }

    public function create()
    {
        return view('admin.you_knows.create');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|unique:countries|max:255',
        // ]);
        You_know::create($request->all());
        
        return redirect()->route('adminYou_knows');
    }

    public function edit($id)
    {
        $you_know = You_know::findOrFail($id);
        return view('admin.you_knows.edit', compact('you_know'));
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'name' => 'required|unique:countries,name,'.$id,
        // ]);
        
        $you_know = You_know::findOrFail($id);
        $you_know->update($request->all());
        return redirect()->route('adminYou_knows');
    }

    public function destroy($id)
    {
        $youknow = You_know::findOrFail($id);
        $translate1 = Translate::where('appID', $youknow->id)->first();
        $translate2 = Translate::where('trans_id', $youknow->id)->first();
        $translate1->delete();
        $translate2->delete();

        You_know::destroy($id);
        return redirect()->route('adminYou_knows');
    }

    public function trans($id)
    {
        $you_know = You_know::findOrFail($id);
        return view('admin.you_knows.trans', compact('you_know'));
    }

    public function translate(Request $request, $id)
    {
        

        $trans = new You_know();
        $trans->title = $request->title;
        $trans->content = $request->content;
        $trans->language = $request->language;
        $trans->save();

        

        $translate = new Translate();
        $youknow = You_know::findOrFail($id);
        $translate->appID = $youknow->id;
        $translate->language = $youknow->language;
        $translate->appName = 'You Know';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        $translate->appID = $trans->id;
        $translate->language = $youknow->language;
        $translate->appName = 'You Know';
        $translate->trans_id = $youknow->id;
        $translate->save();
        $request->session()->flash('success','You Know was translate!');

        return redirect()->route('adminYou_knows');
    }
}
