<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index($language, $id)
    {
    	$category = $category = Category::with('categories')
            ->where('language', $language)->find($id);

        // dd($category);

        if ($category == null) {
            return redirect()->route('home');
        }

    	if ($category->categories->isNotEmpty()) {
    		$ids = $category->categories->pluck('id');
    		$products = Product::whereIn('category_id', $ids)->get();
    	} else {
    		$products = Product::where('category_id', $category->id)->get();
    	}

        return view('detail-category', compact('products'));
    }
}
