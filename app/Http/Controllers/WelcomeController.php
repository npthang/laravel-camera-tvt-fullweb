<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class WelcomeController extends Controller
{
    public function index()
    {	
    	$project = Project::all();
    	return view('welcome',['project'=>$project]);
    }
}
