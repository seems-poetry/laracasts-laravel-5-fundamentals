<?php

Route::get('/', 'PagesController@index');

//Route::get('about',['middleware' => 'auth', 'uses' => 'PagesController@about']);

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

/*
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
*/

// Route::get('home', 'HomeController@index');

Route::resource('articles', 'ArticlesController');

Route::controllers([

	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'

]);

Route::get('foo', ['middleware' => 'manager', function(){

	return 'this page may only be viewed by team managers';

}]);