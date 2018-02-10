<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_type;
use App\Testimonial;
use App\Category;
use App\Product;
use App\Solution;
use App\Partner;
use App\Project;
use App\You_know;
use App\News;
use App\Article;

class HomePageController extends Controller
{
    public function index($slug)
    {
        $tintuc = Article::find(65);
        $sanpham = Article::find(64);
        $doinet = Article::find(54);
        $lienhe = Article::find(66);
        $congtrinh = Article::find(69);
    	$news = News::all();
    	$youknows = You_know::all();
    	$projects = Project::all();
    	$partners = Partner::all();
    	$solutions = Solution::all();
    	$products = Product::all();
        $categories = Category::all();
        $category_types=Category_type::with('categories')->get();
        $testimonials = Testimonial::all();
        return view('homepage', compact('categories', 'products', 'solutions', 'partners', 'projects', 'youknows', 'news', 'doinet', 'sanpham', 'tintuc','category_types', 'testimonials', 'certification', 'hoptac', 'lienhe', 'congtrinh'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::all();
        return $testimonials;
    }
}
