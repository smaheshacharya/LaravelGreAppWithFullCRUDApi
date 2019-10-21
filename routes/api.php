<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List the articla 

Route::get('vocabs-list','VocabapiController@index');
//list single vocabs
Route::get('vocabs-list/{id}','VocabapiController@show');
// create new 

Route::post('vocabs-list','VocabapiController@store');

//update
Route::put('vocabs-list','VocabapiController@store');
//delete 
Route::delete('vocabs-list/{id}','VocabapiController@destroy');