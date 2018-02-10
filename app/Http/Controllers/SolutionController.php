<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solution;

class SolutionController extends Controller
{
    public function index($language)
    {
        // $solutions = Solution::all();
        $solutions = Solution::where('language', $language)->get();

        return view('solutions', compact('solutions'));
    }
    function detail($language, $id){
    	$solutions = Solution::all();
        // $solution = Solution::where('language', $language)->get();
    	$solution = Solution::find($id);

        return view('solutions.detail',compact('solution', 'solutions'));   
    }
}
