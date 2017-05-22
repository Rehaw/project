<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovars;
use App\Catalogs;
class TovarsController extends Controller
{
    public function getIndex($id=null){
		$y=Tovars::where('id', $id)->first();
		return view('tovar')->with('y', $y);
	}
	
	public function getCatalogs(){
		$cats = Catalogs::where('showhide', 'show')->get();
		return view('catalogs')->with('cats', $cats);
	}
	
	public function getCatalog($id=null){
		$y=Tovars::where('catalogs_id', $id)->get();
		return view('catalog')->with('y', $y);
	}
}
