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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix'=>'user'], function(){
    Route::get('/{id?}',   ['as'=>'api.users.index','uses'=>'Api\UserController@index']);
    Route::post('/',       ['as'=>'api.users.store', 'uses'=>'Api\UserController@store']);;
    Route::put('/{id}',    ['as'=>'api.users.update', 'uses'=>'Api\UserController@update']);
    Route::delete('/{id}', ['as'=>'api.users.destroy', 'uses'=>'Api\UserController@destroy']);
});

Route::group(['prefix'=>'doctor'], function(){
    Route::get('/{id?}',   ['as'=>'api.doctors.index','uses'=>'Api\DoctorController@index']);
    Route::post('/',       ['as'=>'api.doctors.store', 'uses'=>'Api\DoctorController@store']);
    Route::put('/{id}',    ['as'=>'api.doctors.update', 'uses'=>'Api\DoctorController@update']);
    Route::delete('/{id}', ['as'=>'api.doctors.destroy', 'uses'=>'Api\DoctorController@destroy']);
});

Route::group(['prefix'=>'patient'], function(){
    Route::get('/{id?}',   ['as'=>'api.patients.index','uses'=>'Api\PatientController@index']);
    Route::post('/',       ['as'=>'api.patients.store', 'uses'=>'Api\PatientController@store']);
    Route::put('/{id}',    ['as'=>'api.patients.update', 'uses'=>'Api\PatientController@update']);
    Route::delete('/{id}', ['as'=>'api.patients.destroy', 'uses'=>'Api\PatientController@destroy']);
});

Route::group(['prefix'=>'scheduling'], function(){
    Route::get('/{id?}',   ['as'=>'api.schedulings.index','uses'=>'Api\SchedulingController@index']);
    Route::post('/',       ['as'=>'api.schedulings.store', 'uses'=>'Api\SchedulingController@store']);
    Route::put('/{id}',    ['as'=>'api.schedulings.update', 'uses'=>'Api\SchedulingController@update']);
    Route::delete('/{id}', ['as'=>'api.schedulings.destroy', 'uses'=>'Api\SchedulingController@destroy']);
});
