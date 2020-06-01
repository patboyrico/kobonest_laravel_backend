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
;

Route::group(['prefix' => 'v1'], function () {
    Route::post('/user/login', 'Api\Auth\LoginController@login');


    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('/user/savings-category', 'Api\Dashboard\SavingsController@getSavingsCategory');
    });

    Route::middleware('auth:api')->get('/user', 'Api\Dashboard\UserController@getUser');
});
