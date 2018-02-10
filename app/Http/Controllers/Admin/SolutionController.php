<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Solution;
use App\Translate;
use Carbon\Carbon;

class SolutionController extends Controller
{
    public function index()
    {
        // $solutions = Solution::all();
        $solutions  = Solution::leftJoin('translates', 'translates.appID', '=', 'solutions.id')
            ->select(
                'solutions.*', 
                'translates.appID', 
                'translates.appName',
                'translates.trans_id'
            )
            ->get();

        return view('admin.solutions.index', compact('solutions'));
    }

    public function create()
    {
        return view('admin.solutions.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/solutions', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }

        Solution::create($data);
        $request->session()->flash('success','Solution was added successful!');

        return redirect()->route('adminSolutions');
    }
    
    public function edit($id)
    {
        $solution = Solution::findOrFail($id);
        return view('admin.solutions.edit', compact('solution'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/solutions', $data['image']);
        }

        $solution = Solution::findOrFail($id);
        $solution->update($data);
        $request->session()->flash('success','Solution was updated successful!');

        return redirect()->route('adminSolutions');
    }

    public function destroy($id)
    {
        $solution = Solution::findOrFail($id);

        $translate1 = Translate::where('appID', $solution->id)->first();
        $translate2 = Translate::where('trans_id', $solution->id)->first();
        $translate1->delete();
        $translate2->delete();

        Solution::destroy($id);

        return redirect()->route('adminSolutions');
    }

    public function trans($id)
    {
        $solution = Solution::findOrFail($id);
        return view('admin.solutions.trans', compact('solution'));
    }

    public function translate(Request $request, $id)
    {
        // dd($request->all());

        $trans = new Solution();
        $trans->name = $request->name;
        $trans->description = $request->description;
        $trans->language = $request->language;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $trans->image = $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/blocks', $data['image']);
        } else {
            $trans->image = $data['image-old'];
        }
        $trans->save();

        

        $translate = new Translate();
        $solution = Solution::findOrFail($id);
        $translate->appID = $solution->id;
        $translate->language = $solution->language;
        $translate->appName = 'Solution';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        // $block = Block::findOrFail($id);
        $translate->appID = $trans->id;
        $translate->language = $solution->language;
        $translate->appName = 'Solution';
        $translate->trans_id = $solution->id;
        $translate->save();

        $request->session()->flash('success','Solution was translate!');

        return redirect()->route('adminSolutions');
    }
}
