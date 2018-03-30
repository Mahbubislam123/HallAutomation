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

Route::get('/', function () {
    return view('fazlulhuq.index');
});

  
Route::auth();


Route::get('/home', 'HomeController@index');


Route::get('/index', 'IndexController@index');
Route::post('/index', 'IndexController@index');


Route::get('/profile', 'ProfileController@index');


Route::resource('/user','UserController');


Route::get('/complain', 'ComplainController@index');
Route::post('complain_submit', 'ComplainController@store');


Route::get('/request', 'RequestController@index');


Route::get('/allotment', 'AllotmentController@index');
Route::post('allotment_submit', 'AllotmentController@store');


Route::resource('/view_allotment','ViewAllotmentController');


Route::resource('/student','StudentController');


Route::resource('/teacher','TeacherController');


Route::resource('/hall_entry_fee','HallEntryController');
Route::post('/hall_entry_fee/{id}', ['as'=>'hall_entry_fee.store', 'uses'=>'HallEntryController@store']);



Route::resource('/room','RoomController');

Route::get('/change_password', 'ChangePasswordController@index');
Route::post('/change_password', 'ChangePasswordController@store');


Route::resource('/viewroom','ViewRoomController');

Route::resource('/assignroom','AssignRoomController');
Route::post('/assignroom/{id}', ['as'=>'assignroom.store', 'uses'=>'AssignRoomController@store']);


Route::resource('/hall_utility_fee','HallUtilityController');
Route::post('/hall_utility_fee/{id}', ['as'=>'hall_utility_fee.store', 'uses'=>'HallUtilityController@store']);


Route::resource('/hall_establishment_fee','HallEstablishmentController');
Route::post('/hall_establishment_fee/{id}', ['as'=>'hall_establishment_fee.store', 'uses'=>'HallEstablishmentController@store']);



 
