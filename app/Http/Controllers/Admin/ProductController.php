<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Translate;
use Carbon\Carbon;
use App\Meta_tag;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::all();
        $products  = Product::leftJoin('translates', 'translates.appID', '=', 'products.id')
            ->select(
                'products.*', 
                'translates.appID', 
                'translates.appName',
                'translates.trans_id'
            )
            ->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // $file = $request->file('image');
        // if (!empty($file)) {
        //     $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
        //     $file->move('upload/products', $data['image']);
        // } else {
        //     $data['image'] = 'default.jpg';
        // }

        $this->validate($request, [
            'image' => 'required|image'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->kind = $request->kind;
        $product->status = $request->status;
        $product->language = $request->language;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $product->image = $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/products', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }

        $product->save();


        $meta_tag = new Meta_tag();
        $meta_tag->title = $request->page_title;
        $meta_tag->keyword = $request->keyword;
        $meta_tag->description = $request->description_seo;
        $meta_tag->post_id = $product->id;
        $meta_tag->app = 'Product';
        $meta_tag->save();

        // Product::create($data);
        $request->session()->flash('success','Product was added successful!');
        
        return redirect()->route('adminProducts');
    }

    public function edit($id)
    {
        $categories = Category::get(['name', 'id']);
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        //$product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->kind = $request->kind;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $product->image = $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/products', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }

        $product->save();


        $meta_tag = new Meta_tag();
        $meta_tag->title = $request->page_title;
        $meta_tag->keyword = $request->keyword;
        $meta_tag->description = $request->description_seo;
        $meta_tag->post_id = $product->id;
        $meta_tag->app = 'Product';
        $meta_tag->save();

        // $product->update($data);
        $request->session()->flash('success','Product was updated successful!');

        return redirect()->route('adminProducts');
    }

    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $translate1 = Translate::where('appID', $product->id)->first();
        $translate2 = Translate::where('trans_id', $product->id)->first();
        $translate1->delete();
        $translate2->delete();

        Product::destroy($id);
        $request->session()->flash('success',$product->name.' is deleted successfully!');

        return redirect()->route('adminProducts');
    }

    public function trans($id)
    {
        $categories = Category::get(['name', 'id']);
        $product = Product::findOrFail($id);
        return view('admin.products.trans', compact('product', 'categories'));
    }

    public function translate(Request $request, $id)
    {
        // dd($request->all());

        $trans = new Product();
        $trans->name = $request->name;
        $trans->description = $request->description;
        $trans->language = $request->language;
        $trans->price = $request->price;
        $trans->quantity = $request->quantity;
        $trans->status = $request->status;
        $trans->category_id = $request->category_id;
        $trans->kind = $request->kind;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $trans->image = $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/products', $data['image']);
        } else {
            $trans->image = $data['image-old'];
        }
        $trans->save();

        

        $translate = new Translate();
        $product = Product::findOrFail($id);
        $translate->appID = $product->id;
        $translate->language = $product->language;
        $translate->appName = 'Product';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        $translate->appID = $trans->id;
        $translate->language = $product->language;
        $translate->appName = 'Product';
        $translate->trans_id = $product->id;
        $translate->save();

        $request->session()->flash('success','Product was translate!');

        return redirect()->route('adminProducts');
    }
}
