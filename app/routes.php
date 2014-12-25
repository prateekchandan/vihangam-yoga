<?php
Route::get('/',array('as'=>'home','uses'=>'HomeController@home'));
Route::get('about',array('as'=>'about','uses'=>'HomeController@about'));
