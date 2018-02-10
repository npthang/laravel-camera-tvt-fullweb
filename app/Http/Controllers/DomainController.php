<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function getRegisterDomain()
    {
    	return view('domain.registerDomain');
    }

    public function getHosting()
    {
    	return view('elements');
    }
}
