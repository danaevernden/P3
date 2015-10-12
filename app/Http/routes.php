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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('practice', function(){
  return 'practice';
});

Route::get('/', 'MasterController@getIndex');
Route::get('/show', 'MasterController@getShow');
Route::get('/books', 'BookController@getIndex');
Route::get('/books/show', 'BookController@getShow');
Route::get('/loremipsum', 'LoremIpsumController@getIndex');
Route::get('/loremipsum/show', 'LoremIpsumController@getShow');
Route::get('/usergenerator', 'UserGenController@getIndex');
Route::get('/usergenerator/show', 'UserGenController@getShow');
