<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/search', 'HomeController@search');
Route::get('/login', 'UserController@login');
Route::get('/issue', 'GoodController@issue');
Route::get('/intro', 'OffserController@introPage');

Route::post('/postLogin', 'UserController@postLogin');

Route::post('/postRegister', 'UserController@postRegister');

Route::post('/postChangePsd', 'UserController@postChangePsd');

Route::post('/postGood', 'GoodController@postGood');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
