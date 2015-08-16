<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/home', 'PagesController@index');


//Articles
Route::resource('/articles', 'ArticlesController');
Route::get('/articles/destroy/{id}', 'ArticlesController@destroy');
//Route::get('/search/{text}', 'ArticlesController@search');

Route::get('/search', [
    'as' => 'ArticlesController.search', 'uses' => 'ArticlesController@search'
]);



// Login + Register

Route::get('/auth/login', function () {
    return view ('auth.login')->with('page_title','Login')->with('username','');
});

Route::get('/auth/signup', function () {
    return view ('auth.signup')->with('page_title','Sign up')->with('username','');
});

Route::get('/logout', 'LoginRegisterController@logout');


Route::post('/auth/login', [
    'as' => 'LoginRegisterController.login', 'uses' => 'LoginRegisterController@login'
]);

Route::post('/auth/signup', [
    'as' => 'LoginRegisterController.signup', 'uses' => 'LoginRegisterController@signup'
]);