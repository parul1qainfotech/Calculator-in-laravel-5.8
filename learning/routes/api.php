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

Route::get('/country','Country\CountryController@country');
Route::get('country/{id}','Country\CountryController@countryByID');
Route::post('country','Country\CountryController@countrysave');
Route::put('country/{country}','Country\CountryController@Countryupdate');
Route::delete('country/{country}','Country\CountryController@Countrydelete');




Route::post('login', 'API\UserController@login');

Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');
});