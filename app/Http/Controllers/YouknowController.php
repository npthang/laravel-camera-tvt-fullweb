<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\You_know;

class YouknowController extends Controller
{
    public function index()
    {
        $youknows = You_know::all();
        return view('youknows', compact('youknows'));
    }

    public function detail($lang ,$id)
    {
        $youknow = You_know::find($id);
        return view('detail-youknow', compact('youknow'));
    }
}
