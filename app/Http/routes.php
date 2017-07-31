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
Route::get('/2', 'HomeController@index2');
Route::get('/about-us', 'HomeController@aboutus');
Route::get ('/contact-us', 'HomeController@contactus');
Route::post('/contact-us', 'HomeController@saveContactUs');
Route::get('/vehicles', 'HomeController@vehicles');
Route::get('/i2', 'HomeController@index2');

Route::get('/application', 'HomeController@application');
Route::get('/credit-application', 'HomeController@creditApplication');
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
