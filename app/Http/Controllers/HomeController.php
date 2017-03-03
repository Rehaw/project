<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogs;
use App\Subscribe;
use App\Http\Requests\SubscribeRequest;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$cats = Catalogs::where('showhide', 'show')->get();
        return view('home')->with('cats', $cats);
    }
	
	public function postSubscribe(SubscribeRequest $r)
	{
		//dd($r->all());
		$arr = [];
		foreach($r->all() as $key => $value){
			$id = (int)$key;
			if($id != 0){
				$arr[] = $id;
			}
		} 
		$body = serialize($arr);
		$r['user_id'] = Auth::user()->id;
		$r['body'] = $body;
		$r['status'] = '-';
		Subscribe::create($r->all());
		return redirect('home');
	}
}
