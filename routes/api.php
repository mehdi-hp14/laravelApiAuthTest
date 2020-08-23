<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('login', 'api\v1\UserController@login');
Route::post('register', 'api\v1\UserController@register');


Route::group(['middleware' => 'auth:mehdi'], function () {
    Route::post('details', 'api\v1\UserController@details');
});

Route::middleware('auth:mehdi')->get('/user', function (Request $request) {
    return $request->user();
});
