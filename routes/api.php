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
    Route::get('/{id?}',   ['as'=>'api.users.index','uses'=>'UserApiController@index']);
    Route::post('/',       ['as'=>'api.users.store', 'uses'=>'UserApiController@store']);;
    Route::put('/{id}',    ['as'=>'api.users.update', 'uses'=>'UserApiController@update']);
    Route::delete('/{id}', ['as'=>'api.users.destroy', 'uses'=>'UserApiController@destroy']);
});

Route::group(['prefix'=>'doctor'], function(){
    Route::get('/{id?}',   ['as'=>'api.doctors.index','uses'=>'DoctorApiController@index']);
    Route::post('/',       ['as'=>'api.doctors.store', 'uses'=>'DoctorApiController@store']);
    Route::put('/{id}',    ['as'=>'api.doctors.update', 'uses'=>'DoctorApiController@update']);
    Route::delete('/{id}', ['as'=>'api.doctors.destroy', 'uses'=>'DoctorApiController@destroy']);
});

Route::group(['prefix'=>'patient'], function(){
    Route::get('/{id?}',   ['as'=>'api.patients.index','uses'=>'PatientApiController@index']);
    Route::post('/',       ['as'=>'api.patients.store', 'uses'=>'PatientApiController@store']);
    Route::put('/{id}',    ['as'=>'api.patients.update', 'uses'=>'PatientApiController@update']);
    Route::delete('/{id}', ['as'=>'api.patients.destroy', 'uses'=>'PatientApiController@destroy']);
});

Route::group(['prefix'=>'scheduling'], function(){
    Route::get('/{id?}',   ['as'=>'api.schedulings.index','uses'=>'SchedulingApiController@index']);
    Route::post('/',       ['as'=>'api.schedulings.store', 'uses'=>'SchedulingApiController@store']);
    Route::put('/{id}',    ['as'=>'api.schedulings.update', 'uses'=>'SchedulingApiController@update']);
    Route::delete('/{id}', ['as'=>'api.schedulings.destroy', 'uses'=>'SchedulingApiController@destroy']);
});
