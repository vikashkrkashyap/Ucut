<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['namespace' => 'Home', 'as' => 'home.'], function ()
{
	Route::get('/', [
		'as' => 'welcome',
		'uses'=>'WelcomeController@showWelcomePage'
	]);
});


Auth::routes();

Route::get('/home', 'HomeController@index');
