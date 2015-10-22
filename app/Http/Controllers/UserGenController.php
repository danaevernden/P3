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
      'numUsers' => 'required|numeric|min:1|max:99'
      ]);
      $input=$request->input('numUsers');
      $city=$request->input('inclCity');
      $state=$request->input('inclState');

    /*user generation*/
    $faker = \Faker\Factory::create();
    $myfakes = array();

    for ($i=0; $i < $input; $i++) {
      $myfakes['name'][$i] = $faker->name;
      if($city==2){
        $myfakes['city'][$i] = $faker->city;
      }
      if($state==2){
        $myfakes['state'][$i] = $faker->state;
      }
    }
    $i=0;
    $newstring='';

    for($i=0; $i < $input; $i++){
      $newstring=$newstring.$myfakes['name'][$i].'<br> ';
      if($city==1 && $state==1){
        $newstring=$newstring.'<br>';
      }
      if($city==2){
        if($state==2){
          $newstring=$newstring.$myfakes['city'][$i].', ';
        }
        else{
          $newstring=$newstring.$myfakes['city'][$i].'<br><br>';
        }
      }
      elseif($state==2){
        $newstring = $newstring.$myfakes['state'][$i].'<br><br>';
      }
    }

  return view('UserGen.postindex')->with('newstring', $newstring);

  }
}
