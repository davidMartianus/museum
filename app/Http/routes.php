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

// Route::get('/', function () {
//     return view('welcome');
// });

//user



//admin
Route::get('admin','adminController@index');
Route::get('admin/add-location','adminController@addLocView');
Route::get('admin/show-location','adminController@listLoc');

Route::get('admin/add-peninggalan','adminController@addArc');
Route::get('admin/show-peninggalan','adminController@listArc');