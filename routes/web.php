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

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('home', ['as'=>'home','uses'=>'HomeController@index']);

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
  
    Route::group(['prefix'=>'users'], function(){
      Route::get('',             ['as'=>'users.index','uses'=>'UserController@index']);
      Route::get('create',       ['as'=>'users.create', 'uses'=>'UserController@create']);
      Route::post('store',       ['as'=>'users.store', 'uses'=>'UserController@store']);
      Route::get('edit/{id}',    ['as'=>'users.edit', 'uses'=>'UserController@edit']);
      Route::post('update/{id}', ['as'=>'users.update', 'uses'=>'UserController@update']);
      Route::get('destroy/{id}', ['as'=>'users.destroy', 'uses'=>'UserController@destroy']);

      Route::get('datatables',   ['as'=>'users.datatables', 'uses'=>'UserController@datatables']);
    });

    Route::group(['prefix'=>'doctors'], function(){
      Route::get('',             ['as'=>'doctors.index','uses'=>'DoctorController@index']);
      Route::get('create',       ['as'=>'doctors.create', 'uses'=>'DoctorController@create']);
      Route::post('store',       ['as'=>'doctors.store', 'uses'=>'DoctorController@store']);
      Route::get('edit/{id}',    ['as'=>'doctors.edit', 'uses'=>'DoctorController@edit']);
      Route::post('update/{id}', ['as'=>'doctors.update', 'uses'=>'DoctorController@update']);
      Route::get('destroy/{id}', ['as'=>'doctors.destroy', 'uses'=>'DoctorController@destroy']);

      Route::get('datatables',   ['as'=>'doctors.datatables', 'uses'=>'DoctorController@datatables']);
    });

    Route::group(['prefix'=>'patients'], function(){
      Route::get('',             ['as'=>'patients.index','uses'=>'PatientController@index']);
      Route::get('create',       ['as'=>'patients.create', 'uses'=>'PatientController@create']);
      Route::post('store',       ['as'=>'patients.store', 'uses'=>'PatientController@store']);
      Route::get('edit/{id}',    ['as'=>'patients.edit', 'uses'=>'PatientController@edit']);
      Route::post('update/{id}', ['as'=>'patients.update', 'uses'=>'PatientController@update']);
      Route::get('destroy/{id}', ['as'=>'patients.destroy', 'uses'=>'PatientController@destroy']);

      Route::get('datatables',   ['as'=>'patients.datatables', 'uses'=>'PatientController@datatables']);
    });

    Route::group(['prefix'=>'schedulings'], function(){
      Route::get('',             ['as'=>'schedulings.index','uses'=>'SchedulingController@index']);
      Route::get('create',       ['as'=>'schedulings.create', 'uses'=>'SchedulingController@create']);
      Route::post('store',       ['as'=>'schedulings.store', 'uses'=>'SchedulingController@store']);
      Route::get('edit/{id}',    ['as'=>'schedulings.edit', 'uses'=>'SchedulingController@edit']);
      Route::post('update/{id}', ['as'=>'schedulings.update', 'uses'=>'SchedulingController@update']);
      Route::get('destroy/{id}', ['as'=>'schedulings.destroy', 'uses'=>'SchedulingController@destroy']);

      Route::get('datatables',   ['as'=>'schedulings.datatables', 'uses'=>'SchedulingController@datatables']);
    });

});
