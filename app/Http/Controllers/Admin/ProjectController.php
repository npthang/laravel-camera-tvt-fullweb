<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Translate;
use App\Http\Requests\ProjectRequest;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index()
    {
        // $projects = Project::all();
        $projects  = Project::leftJoin('translates', 'translates.appID', '=', 'projects.id')
            ->select(
                'projects.*', 
                'translates.appID', 
                'translates.appName',
                'translates.trans_id'
            )
            ->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(ProjectRequest $request)
    {
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/projects', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }

        Project::create($data);
        $request->session()->flash('success','Project was added successful!');
        
        return redirect()->route('adminProjects');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(ProjectRequest $request, $id)
    {
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/projects', $data['image']);
        }

        $project = Project::findOrFail($id);
        $project->update($data);
        $request->session()->flash('success','Project was added successful!');

        return redirect()->route('adminProjects');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $translate1 = Translate::where('appID', $project->id)->first();
        $translate2 = Translate::where('trans_id', $project->id)->first();
        $translate1->delete();
        $translate2->delete();

        Project::destroy($id);
        // $request->session()->flash('success',$project->name.' is deleted successfully!');

        return redirect()->route('adminProjects');
    }

    public function trans($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.trans', compact('project'));
    }

    public function translate(Request $request, $id)
    {
        // dd($request->all());

        $trans = new Project();
        $trans->name = $request->name;
        $trans->description = $request->description;
        $trans->language = $request->language;
        $trans->address = $request->address;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $trans->image = $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/projects', $data['image']);
        } else {
            $trans->image = $data['image-old'];
        }
        $trans->save();

        

        $translate = new Translate();
        $project = Project::findOrFail($id);
        $translate->appID = $project->id;
        $translate->language = $project->language;
        $translate->appName = 'Project';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        $translate->appID = $trans->id;
        $translate->language = $project->language;
        $translate->appName = 'Project';
        $translate->trans_id = $project->id;
        $translate->save();

        $request->session()->flash('success','Project was translate!');

        return redirect()->route('adminProjects');
    }
}
