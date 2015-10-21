<?php

namespace P3\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserGenController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }


    public function getIndex() {
        return view('UserGen.index');
    }


  public function postIndex(Request $request) {
    /*validation*/
    $this->validate($request,[
      'numUsers' => 'required|integer|between:1,99'
      ]);
      $input=$request->input('numUsers');
      $city=$request->input('inclCity');
      $stateAbbr=$request->input('inclState');

    /*user generation*/
    $faker = \Faker\Factory::create();
    $myfakes = array();

    for ($i=0; $i < $input; $i++) {
      $myfakes['name'][$i] = $faker->name;
      if(isset($city)){
        $myfakes['city'][$i] = $faker->city;
      }
      if(isset($stateAbbr)){
        $myfakes['stateAbbr'][$i] = $faker->stateAbbr;
      }
    }
    return view('UserGen.postindex')->with('myfakes', $myfakes);
  }
}
