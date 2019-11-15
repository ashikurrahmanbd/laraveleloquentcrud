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


Route::get('/', 'MyController@AppHome');

//just viewing the form for inserting data
Route::get('/addnewuser', 'MyController@AddNew');


//collecting all the data from user and sending to database
Route::post('/stordata', 'MyController@storeData');

//sigleData
Route::get('/singledata/{id}', 'MyController@singleData');

//delete method

Route::get('/deletedata/{id}', 'MyController@deleteData');


//edit route
Route::get('/editdata/{id}', 'MyController@editData');

//Update route
Route::post('updatedata/{id}', 'MyController@updateData');