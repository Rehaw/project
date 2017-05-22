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
		if(!Auth::guest()){
			$subs = Subscribe::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->first();
			if(isset($subs->body)){
				$arr = unserialize($subs->body);
			}
			else {
				$arr = [];
			}
		}
		else {
			$arr = [];
		}
		//dd($subs->email);
		if($subs!=null){
			return view('home')->with('cats', $cats)->with('arr', $arr)->with('subs', $subs);
		}
		else {
			return view('home')->with('cats', $cats)->with('arr', $arr)->with('subs', Auth::user());
		}
    }
	
	public function postSubscribe(SubscribeRequest $r)
	{
		//dd($r->all());
		unset($r['_token']);
		$arr = [];
		foreach($r->all() as $key => $value){
			$id = (int)$key;
			if($id != 0){
				$arr[$id] = $id;
			}
		} 
		$body = serialize($arr);
		$arr_r = [];
		$arr_r['user_id'] = Auth::user()->id;
		$arr_r['body'] = $body;
		$arr_r['email'] = $r['email'];
		$arr_r['status'] = '-';
		$obj = Subscribe::where('user_id', Auth::user()->id)->first();
		if(isset($obj->id)){
			$obj->update($arr_r);
		}
		else {
			Subscribe::create($arr_r);
		}
		return redirect('home');
	}
}
