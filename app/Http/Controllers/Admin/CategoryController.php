<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Translate;
use App\Category_type;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::with('category_type')->get();
        $categories  = Category::leftJoin('translates', 'translates.appID', '=', 'categories.id')
            ->select(
                'categories.*', 
                'translates.appID', 
                'translates.appName',
                'translates.trans_id'
            )
            ->with('category_type')
            ->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $category_types = Category_type::pluck('name', 'id');

        $category = Category::pluck('name', 'id');
        $category ->prepend('Default',"0");
        return view('admin.categories.create', compact('category_types','category'));

    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        $request->session()->flash('success','Category was added successful!');
        return redirect()->route('adminCategories');
    }

    public function edit($id)
    {
        $category_types = Category_type::pluck('name', 'id');

        $category = Category::pluck('name', 'id');
        //add default
        $category ->prepend('Default',"0");

        $categories = Category::findOrFail($id);
        return view('admin.categories.edit', compact('categories', 'category_types','category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        $request->session()->flash('success','Category was updated successful!');

        return redirect()->route('adminCategories');
    }

    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $translate1 = Translate::where('appID', $category->id)->first();
        $translate2 = Translate::where('trans_id', $category->id)->first();
        $translate1->delete();
        $translate2->delete();
        
        Category::destroy($id);
        $request->session()->flash('success',$category->name.' is deleted successfully!');

        return redirect()->route('adminCategories');
    }

    public function trans($id)
    {
        $category_types = Category_type::pluck('name', 'id');
        $category = Category::findOrFail($id);
        return view('admin.categories.trans', compact('category', 'category_types'));
    }

    public function translate(Request $request, $id)
    {
        // dd($request->all());

        $trans = new Category();
        $trans->name = $request->name;
        $trans->slug = $request->slug;
        $trans->sortable = $request->sortable;
        $trans->language = $request->language;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $trans->image = $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/categories', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        $trans->save();

        

        $translate = new Translate();
        $category = Category::findOrFail($id);
        $translate->appID = $category->id;
        $translate->language = $category->language;
        $translate->appName = 'Category';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        $translate->appID = $trans->id;
        $translate->language = $category->language;
        $translate->appName = 'Category';
        $translate->trans_id = $category->id;
        $translate->save();

        // $request->session()->flash('success','Category was translate!');

        return redirect()->route('adminCategories');
    }
}
