<?php

use App\Http\Middleware\CheckUser;
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

//Route::get('/', 'AdminController@index' );

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin','AdminController@home');
    Route::get('/admin/laboratory' , 'AdminController@laboratory');  // admin
    Route::get('/admin/reportproblem/' , 'AdminController@reportProblem');     // Reportar problemas de PC 
    Route::get('/admin/solutionproblem/' , 'AdminController@solutionProblem' ); //Solucionar problemas de PC 
    Route::get('/admin/addproblem/' , 'AdminController@addProblem' );     //agregar nuevo problema
    Route::get('/admin/addsolution/' , 'AdminController@addSolution' );   // agregar nueva solucion
    Route::get('/admin/reportlaboratoryclean/' , 'AdminController@reportLaboratoryClean' );      
    Route::get('/admin/reportlaboratoryobservation/' , 'AdminController@reportLaboratoryObservation' );
    Route::resource('laboratory','LaboratoryController');
    Route::get('types/list','AdminController@listing');
    Route::get('laboratories/list','LaboratoryController@listing');
    Route::resource('cleaning', 'CleaningController');
    Route::get('cleaningall/{id}','CleaningController@listall');

    Route::resource('admin/users','PeopleController');
    Route::get('peoplelist','PeopleController@listing' );
    Route::get('peopleall','PeopleController@listall' );
    
    Route::resource('observation', 'ObservationController');
    Route::get('observationall/{id}', 'ObservationController@listall');

    Route::resource('standarproblem', 'StandarProblemController');
    Route::get('problemlist/{search}','StandarProblemController@listing');
    Route::get('standarproblemlist' , 'StandarProblemController@listall');
   
    Route::get('standarproblemsolutions/{id}' , 'StandarProblemController@solutions');
    Route::get('newsolution/{id}' , 'StandarProblemController@newSolution');
    Route::resource('equipment','EquipmentController');
    Route::get('equipmentlist/{idLab}' ,'EquipmentController@listing');
    Route::get('pc/{key}/{value}','EquipmentController@thereCod');
    Route::resource('equipmentproblem' , 'EquipmentProblemController');
    Route::get('equipmentproblemlist' , 'EquipmentProblemController@listall');
    Route::resource('solution' ,'SolutionController' );    

    Route::resource('reglog','LogController');
    Route::resource('us','UserController');
    Route::get('uscr/{id}','UserController@assignUser');
    Route::get('updateuscr/{id}','UserController@sec');
    Route::put('updateus','UserController@updateus');
    Route::put('updatepa','UserController@updatepa');
    Route::put('active','UserController@active');
});



//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('/', 'Auth\AuthController@getLogin')
        ->middleware(CheckUser::class);   // fue creado el middleware para el ingreso autoamtico a al admin si es que el usuario esta logueado


Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



