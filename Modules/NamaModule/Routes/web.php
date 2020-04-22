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

Route::prefix('namamodule')->group(function() {
    Route::get('/', 'NamaModuleController@index');
    Route::get('/user/insert-data', ['as' => 'user.insertdata', 'uses' => 'UserController@insertData']); 
    Route::post('/user/store-data', ['as' => 'user.storedata', 'uses' => 'UserController@storeData']);
    Route::get('/user/read-data', ['as' => 'user.readdata', 'uses' => 'UserController@readData']); 
    Route::get('/user/edit-data/{id}', ['as' => 'user.editdata', 'uses' => 'UserController@editData']);
    Route::post('/user/update-data/{id}', ['as' => 'user.updatedata', 'uses' => 'UserController@updateData']); 
    Route::get('/user/delete-data/{id}', ['as' => 'user.deletedata', 'uses' => 'UserController@deleteData']); 
}); 
