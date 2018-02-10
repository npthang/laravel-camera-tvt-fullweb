<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\News;
use App\Article;
use App\Project;
use App\Block;
use App\Solution;
use App\Category;
use App\Partner;
use App\You_know;
use App\Video;
use App\Testimonial;
use App\Category_type;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $nameSeach = $request->search;

        $products = Product::whereRaw('name LIKE "%'.$nameSeach.'%"')->get();

        $news = News::whereRaw('title LIKE "%'.$nameSeach.'%"')->get();

        $articles = Article::whereRaw('name LIKE "%'.$nameSeach.'%"')->get();

        $projects = Project::whereRaw('name LIKE "%'.$nameSeach.'%"')->get();
        $congtrinh = Article::find(69);

        $blocks = Block::whereRaw('title LIKE "%'.$nameSeach.'%"')->get();

        $solutions = Solution::whereRaw('name LIKE "%'.$nameSeach.'%"')->get();

        $categories = Category::whereRaw('name LIKE "%'.$nameSeach.'%"')->get();
       
        $partners = Partner::whereRaw('name LIKE "%'.$nameSeach.'%"')->get();

        $youknows = You_know::whereRaw('title LIKE "%'.$nameSeach.'%"')->get();

        $videos = Video::whereRaw('title LIKE "%'.$nameSeach.'%"')->get();

        $testimonials = Testimonial::whereRaw('name LIKE "%'.$nameSeach.'%"')->get();

        $category_types = Category_type::whereRaw('name LIKE "%'.$nameSeach.'%"')->get();
        
        // dd($news);

        return view('search.result', compact('products', 'nameSeach', 'news', 'articles', 'projects',
    	'blocks', 'solutions', 'categories', 'partners' , 'youknows', 'videos', 'testimonials', 'category_types', 'congtrinh'));
    }
}
