<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class UploadController extends Controller
{
    public function index(Request $request)
    {
    	// return response()->json([
    	// 	$request->all(),
    	// ]);
    	$image = $request->image;
    	$image_name = str_slug(Carbon::now()).'.'.$image->getClientOriginalExtension();
        $image->move('uploads', $image_name);

    	return 'http://cameratvtvietnam.com/uploads/' . $image_name;
    }
}
