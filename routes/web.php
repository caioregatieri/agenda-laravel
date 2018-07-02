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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::get('home', ['as'=>'home','uses'=>'HomeController@index']);
  
    Route::group(['prefix'=>'users'], function(){
      Route::get('',             ['as'=>'users.index','uses'=>'DoctorController@index']);
      Route::get('create',       ['as'=>'users.create', 'uses'=>'DoctorController@create']);
      Route::post('store',       ['as'=>'users.store', 'uses'=>'DoctorController@store']);
      Route::get('edit/{id}',    ['as'=>'users.edit', 'uses'=>'DoctorController@edit']);
      Route::post('update/{id}', ['as'=>'users.update', 'uses'=>'DoctorController@update']);
      Route::get('destroy/{id}', ['as'=>'users.destroy', 'uses'=>'DoctorController@destroy']);
    });

    Route::group(['prefix'=>'doctors'], function(){
      Route::get('',             ['as'=>'doctors.index','uses'=>'DoctorController@index']);
      Route::get('create',       ['as'=>'doctors.create', 'uses'=>'DoctorController@create']);
      Route::post('store',       ['as'=>'doctors.store', 'uses'=>'DoctorController@store']);
      Route::get('edit/{id}',    ['as'=>'doctors.edit', 'uses'=>'DoctorController@edit']);
      Route::post('update/{id}', ['as'=>'doctors.update', 'uses'=>'DoctorController@update']);
      Route::get('destroy/{id}', ['as'=>'doctors.destroy', 'uses'=>'DoctorController@destroy']);
    });

    Route::group(['prefix'=>'patients'], function(){
      Route::get('',             ['as'=>'patients.index','uses'=>'PatientController@index']);
      Route::get('create',       ['as'=>'patients.create', 'uses'=>'PatientController@create']);
      Route::post('store',       ['as'=>'patients.store', 'uses'=>'PatientController@store']);
      Route::get('edit/{id}',    ['as'=>'patients.edit', 'uses'=>'PatientController@edit']);
      Route::post('update/{id}', ['as'=>'patients.update', 'uses'=>'PatientController@update']);
      Route::get('destroy/{id}', ['as'=>'patients.destroy', 'uses'=>'PatientController@destroy']);
    });

    Route::group(['prefix'=>'schedulings'], function(){
      Route::get('',             ['as'=>'schedulings.index','uses'=>'SchedulingController@index']);
      Route::get('create',       ['as'=>'schedulings.create', 'uses'=>'SchedulingController@create']);
      Route::post('store',       ['as'=>'schedulings.store', 'uses'=>'SchedulingController@store']);
      Route::get('edit/{id}',    ['as'=>'schedulings.edit', 'uses'=>'SchedulingController@edit']);
      Route::post('update/{id}', ['as'=>'schedulings.update', 'uses'=>'SchedulingController@update']);
      Route::get('destroy/{id}', ['as'=>'schedulings.destroy', 'uses'=>'SchedulingController@destroy']);
    });

});
