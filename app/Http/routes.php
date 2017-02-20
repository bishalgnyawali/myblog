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

Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

Route::get('userpage', 'PagesController@getUserPage');
Route::resource('posts','PostController');

Route::post('/signup', [
    'uses' => 'PagesController@postSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'PagesController@postSignIn',
    'as' => 'signin'
]);


Route::auth();

Route::get('/home', 'HomeController@index');
