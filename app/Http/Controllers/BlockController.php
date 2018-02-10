<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Block;

class BlockController extends Controller
{

    public function index()
    {
        $block_daily = Block::where('type', '=', 1)->get();
    	$daily_anh = Block::where('type', '=', 1)->where('image', '<>', null)->get();
	    $block_hotro = Block::where('type', '=', 2)->get();
	    $block_tailieu = Block::where('type', '=', 3)->get();

	    return [$block_daily, $block_hotro, $block_tailieu, $daily_anh];
    }

    public function block($slug)
    {
    	$daily = Block::where('link', '=', url()->current())->first();

    	return view('daily', compact('daily'));
    }
}
