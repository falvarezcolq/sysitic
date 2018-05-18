<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AdminController@index' );
Route::get('/admin','AdminController@home');
Route::get('/admin/laboratory' , 'AdminController@laboratory');
Route::get('/admin/reportproblem/' , 'AdminController@reportProblem');
Route::get('/admin/solutionproblem/' , 'AdminController@solutionProblem' );
Route::resource('laboratory','LaboratoryController');
Route::get('laboratories/list','LaboratoryController@listing');
Route::resource('cleaning', 'CleaningController');
