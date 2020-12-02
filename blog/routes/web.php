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

Route::group(['middleware'=>['web']],function()
{

    Route::get('/welcome', function () {
         return view('welcome');
      });

    Route::get('/login', function () {
    return view('login');
});


});

//Route::get('/welcome', function () {
  //  return view('welcome');
//})//->middleware('age');

//Route::get('/login', function () {
  //  return view('login');
//});

//Route::get('user/{name?}',function($name="default name"){
  //  return view('mypage');
//});

//Route::get('site/{site?}','Youtube@index');
Route::view("welcome","welcome");
Route::view("login","login");
//Route::post('/login','Youtube@index');
Route::post('/login','loginsession@loginflash');
Route::get('/userdata','Users@userdb');
Route::get('/model','Usermodels@index');
Route::get('/list','Companies@list');

Route::view("parent","layout");
Route::view("child","template");
Route::post('/file','files@index');
Route::view('/formfile','Files');
//Route::get('/operation','Operations@fetch');
//Route::view('/fetch','fetch');
Route::post('/datasubmit','Operations@insert');
Route::view('/insert','fetch');