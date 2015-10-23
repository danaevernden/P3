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

Route::get('/', 'MasterController@getIndex');

Route::get('/loremipsum', 'LoremIpsumController@getCreate');
Route::post('/loremipsum', 'LoremIpsumController@postIndex');
Route::get('/usergenerator', 'UserGenController@getIndex');
Route::post('/usergenerator', 'UserGenController@postIndex');
Route::get('/passwordgenerator', 'PwordGenController@getIndex');
Route::post('/passwordgenerator', 'PwordGenController@postIndex');



if(App::environment('local')) {
  /*fun packages and local env packages*/
  Route::get('/practice', function() {
      $random = new Rych\Random\Random();
      return $random->getRandomString(8);
  });
Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};
