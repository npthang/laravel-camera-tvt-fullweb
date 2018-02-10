<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;
use App\Http\Requests\PartnerRequest;
use Carbon\Carbon;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(PartnerRequest $request)
    {
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/partners', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }

        Partner::create($data);
        $request->session()->flash('success','Partner was added successful!');
        
        return redirect()->route('adminPartners');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(PartnerRequest $request, $id)
    {
        $partner = Partner::findOrFail($id);
        
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/partners', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }

        $partner->update($data);
        $request->session()->flash('success','Partner was updated successful!');

        return redirect()->route('adminPartners');
    }

    public function destroy(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        Partner::destroy($id);
        $request->session()->flash('success',$partner->name.' is deleted successfully!');

        return redirect()->route('adminPartners');
    }
}
