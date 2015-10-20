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


//public function postIndex($numUsers = null){
  //return 'numusers: '.$numUsers;
//}


  public function postIndex(Request $request) {
    //validation
    $this->validate($request,[
      'numpara => required|integer|between:1,99'
      ]);

      $input=$request->input('numUsers');
    //user generation
  $faker = Faker\Factory::create();

  for ($i=0; $i < $numUsers; $i++) {
    echo $faker->name, "\n";
    echo $faker->address;
  }
}
}
  // generate data by accessing properties
    // 'Lucy Cechtelar';
    // "426 Jordy Lodge
    // Cartwrightshire, SC 88120-6700"

    // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
    // et sit et mollitia sed.
    // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
    // sit minima sint.
