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
Route::middleware('auth:api')->get('users', function(Request $request) {
    return auth()->user();
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('users', 'UserController');
Route::get('users/fetch-all', 'UserController@fetchAll');
Route::post('users/do-login', 'UserController@doLogin');
Route::post('users/register', 'UserController@doRegister');