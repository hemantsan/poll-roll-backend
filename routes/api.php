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
// Route::middleware('jwt.auth')->get('users', function(Request $request) {
//     return auth()->user();
// });

// Route::group(['middleware' => ['api']], function () {
//     Route::post('users/do-login', 'UserController@doLogin');
//     Route::group(['middleware' => 'jwt.auth'], function () {
//     });
// });

Route::post('users/do-login', 'UserController@doLogin');
Route::post('users/register', 'UserController@doRegister');

Route::middleware('jwt-auth')->group(function(){
    Route::apiResource('polls', 'PollsController');
    Route::get('polls/fetch-all', 'PollsController@index');
    Route::post('polls/create', 'PollsController@store');
    Route::apiResource('users', 'UserController');
    Route::get('users/fetch-all', 'UserController@fetchAll');
});