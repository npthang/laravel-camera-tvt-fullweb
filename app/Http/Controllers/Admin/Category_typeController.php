<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category_type;
use App\Translate;
use App\Http\Requests\Category_typeRequest;

class Category_typeController extends Controller
{
    public function index()
    {
        $category_types  = Category_type::leftJoin('translates', 'translates.appID', '=', 'category_types.id')
            ->select(
                'category_types.*', 
                'translates.appID', 
                'translates.appName',
                'translates.trans_id'
            )
            ->get();
            // dd($category_types);

        return view('admin.category_types.index', compact('category_types'));
    }

    public function create()
    {
        return view('admin.category_types.create');
    }

    public function store(Category_typeRequest $request)
    {
        Category_type::create($request->all());

        $request->session()->flash('success','Category Type was added successful!');

        return redirect()->route('adminCategory_types');
    }

    public function edit($id)
    {
        $category_type = Category_type::findOrFail($id);
        return view('admin.category_types.edit', compact('category_type'));
    }

    public function update(Category_typeRequest $request, $id)
    {
        $category_type = Category_type::findOrFail($id);
        $category_type->update($request->all());

        $request->session()->flash('success','Category Type was updated successful!');

        return redirect()->route('adminCategory_types');
    }

    public function destroy(Request $request, $id)
    {
        $categoty_type = Category_type::findOrFail($id);
        Category_type::destroy($id);

        $translate1 = Translate::where('appID', $categoty_type->id)->first();
        $translate2 = Translate::where('trans_id', $categoty_type->id)->first();
        $translate1->delete();
        $translate2->delete();

        $request->session()->flash('success',$categoty_type->name.' is deleted successfully!');

        return redirect()->route('adminCategory_types');
    }

    public function trans($id)
    {
        $category_type = Category_type::findOrFail($id);

        return view('admin.category_types.trans', compact('category_type'));
    }

    public function translate(Request $request, $id)
    {
        // dd($request->all());

        $trans = new Category_type();
        $trans->name = $request->name;
        $trans->slug = $request->slug;
        $trans->language = $request->language;
        $trans->sortable = $request->sortable;
        $trans->save();

        

        $translate = new Translate();
        $category_type = Category_type::findOrFail($id);
        $translate->appID = $category_type->id;
        $translate->language = $category_type->language;
        $translate->appName = 'Category Type';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        $translate->appID = $trans->id;
        $translate->language = $category_type->language;
        $translate->appName = 'Category Type';
        $translate->trans_id = $category_type->id;
        $translate->save();

        // $request->session()->flash('success','Block was translate!');

        return redirect()->route('adminCategory_types');
    }
}
