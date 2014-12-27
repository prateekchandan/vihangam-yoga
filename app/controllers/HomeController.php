<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		View::share('page_title','Unwinding Sprituality');
		return View::make('home');
	}

	public function about()
	{
		View::share('page_title','About Vihangam Yoga');
		return View::make('page.about');
	}

	public function vrittikut()
	{
		View::share('page_title','Vrittikut Ashram , Ballia');
		return View::make('ashram.vrittikut');
	}

	public function jhunsi()
	{
		View::share('page_title','Maharshi Sadafaldeo Ashram, Jhunsi, Allahabad');
		return View::make('ashram.jhunsi');
	}

	public function shunya_sikhar()
	{
		View::share('page_title','Himalaya Shunya Shikar Ashram');
		return View::make('ashram.shunya_sikhar');
	}

	public function madhumati()
	{
		View::share('page_title','Madhumati Ashram , Gaya');
		return View::make('ashram.vrittikut');
	}

	public function dandakvan()
	{
		View::share('page_title','Dandakvan Ashram , Gujrat');
		return View::make('ashram.vrittikut');
	}

	public function mahamandir()
	{
		View::share('page_title','Swarveda Mahamandir , Varanasi');
		return View::make('ashram.vrittikut');
	}


}