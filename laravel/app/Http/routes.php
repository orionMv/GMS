<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
    
Route::get('/',function(){return redirect('/dashboard');});


//Dashboard Route
Route::get('/dashboard',['as'=>'viewDashBoard','uses'=>'applicationViewController@dashboard']);

    
    
// Profile Routes
Route::get('/profile',['as'=>'viewClientProfilePage','uses'=>'applicationViewController@profile']);

Route::group(['prefix'=>'profile'],function(){
    
    Route::get('update',['as'=>'updateClientProfilePage','uses'=>'clientProfileController@updateClientProfile']);
    Route::post('update',['as'=>'updateClientProfileRequest','uses'=>'clientProfileController@update']);
    
});

    
    
});
