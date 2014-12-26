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


}