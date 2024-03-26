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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Allord','Api\OrderController@index');


Route::get('/showone/{id}','Api\OrderController@show');


Route::post('/create','Api\OrderController@create');


Route::post('/delete','Api\OrderController@delete');


Route::post('/update','Api\OrderController@update');
