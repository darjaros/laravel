<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    //
    public function index()
    {
    	return view('sites.index');

    }
    public function notknow()
    {
    	return view('sites.notknow');

    }
}
