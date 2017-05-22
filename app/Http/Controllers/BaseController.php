<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovars;

class BaseController extends Controller
{
    public function getIndex(){
		$tovars = Tovars::where('showhide', 'show')->orderBy('id', 'DESC')->limit(6)->get();
		return view('index')->with('tovars', $tovars);
	}
}
