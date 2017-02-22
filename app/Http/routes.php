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

Route::post('/logout', [
    'uses' => 'PagesController@getLogout',
    'as' => 'logout'
]);

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

Route::get('/signin', [
    'uses' => 'PagesController@postSignIn',
    'as' => 'signin'
]);
Route::post('/about', [
    'uses' => 'PagesController@getAbout',
    'as' => 'about'
]);
Route::post('/contact', [
    'uses' => 'PagesController@getContact',
    'as' => 'contact'
]);

Route::get('/userpage', [
    'uses' => 'PagesController@getUserPage',
    'as' => 'userpage',
    'middleware' => 'auth'
]);




Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
