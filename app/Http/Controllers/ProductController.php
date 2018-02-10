<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Block;

class ProductController extends Controller
{
    public function index($language)
    {
        $block_daily = Block::where('type', '=', 1)->get();
        $products = Product::where('language', $language)->get();
        return view('products', compact('products', 'block_daily'));
    }

    public function show($language, $slug)
    {
        $product = Product::where('slug', $slug)
                            ->where('language', $language)->first();

        // dd($product);
        if ($product == null) {
            return redirect()->route('home');
        }

        $product_lienquan = Product::where('category_id', '=', $product->category_id)->take(6)->get();
        return view('detail-product')
            ->with('product', $product)
            ->with('product_lienquan', $product_lienquan);
    }
}
