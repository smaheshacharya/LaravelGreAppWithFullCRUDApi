<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','PageController@home');

Route::get('/index','PageController@index');
Route::get('/setting','PageController@setting');
Route::get('/about','PageController@about');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/basic', 'PageController@basic');
Route::get('/inter', 'PageController@inter');
Route::get('/adv', 'PageController@adv');
Route::resource('vocab','VocabController');
Route::get('/store_progress', 'UserprogressController@store_progress');//user progress store data 
Route::get('/show_progress', 'UserprogressController@show_progress');//user progress store data 


// Route::resource('/cruds', 'CrudsController');
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');