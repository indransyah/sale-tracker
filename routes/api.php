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

Route::post('/click', 'ClickController@store');
Route::get('/click/{link}', 'ClickController@total');

Route::post('/sale', 'SaleController@store');
Route::get('/sale/{link}', 'SaleController@total');

Route::post('/email', 'EmailController@store');
Route::get('/email/{link}', 'EmailController@total');