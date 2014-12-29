<?php
Route::get('/',array('as'=>'home','uses'=>'HomeController@home'));
Route::get('about',array('as'=>'about','uses'=>'HomeController@about'));

// Ashram Routes
Route::get('vrittikut-ashram',array('as'=>'vrittikut','uses'=>'HomeController@vrittikut'));
Route::get('jhunsi-ashram',array('as'=>'jhunsi','uses'=>'HomeController@jhunsi'));
Route::get('shunya-shikhar-ashram',array('as'=>'shunya_sikhar','uses'=>'HomeController@shunya_sikhar'));
Route::get('madhumati-ashram',array('as'=>'madhumati','uses'=>'HomeController@madhumati'));
Route::get('dandakvan-ashram',array('as'=>'dandakvan','uses'=>'HomeController@dandakvan'));
Route::get('swarved-mahamandir',array('as'=>'mahamandir','uses'=>'HomeController@mahamandir'));

// Pages
Route::get('health-and-environment',array('as'=>'healthEnvironment','uses'=>'HomeController@healthEnvironment'));

