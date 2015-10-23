<?php

namespace P3\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PwordGenController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }


    public function getIndex() {
        return view('PwordGen.index');
    }


    public function postIndex(Request $request) {
      /*validation, although it's not necessary*/
      $this->validate($request,[
        'numWords' => 'required|numeric|min:1|max:9'
      ]);
      #initialiing variables
      $numWords=$request->input('numWords');
      $uppercase=$request->input('uppercase');
      $inclNumber=$request->input('inclNumber');
      $inclSymbol=$request->input('inclSymbol');
      $numNumber=$request->input('numNumber');
      $numSymbol=$request->input('numSymbol');

      $words = file('php/corncob_lowercase.txt', FILE_IGNORE_NEW_LINES);
      $symbols = Array ('!', '@', '#', '$', '%', '&');
      $wordslen = sizeof($words);

      # create the initial password, 3 words long
      for ($i=0; $i<3; $i++){
        $random_word= rand(0,$wordslen);
        if ($i == 0){
          $password = $words[$random_word];
        }
      else{
        $password = $password.'-'.$words[$random_word];
        }
      }

      #add on to the password according to the desired length
      if(null!==$numWords){
        for ($i = 1; $i < $numWords-2; $i++) {
          $random = rand(0,$wordslen-1);
          $password = $password.'-'.$words[$random];
        }

        # if uppercase is specified, change letters to uppercase
        if(null!==$uppercase){
            $password = strtoupper($password);
          }
        }

        # if the number box is checked, append a random number to the
        # end of the password

        if (null!==$inclNumber) {
            for ($i=1; $i < $numNumber +1; $i++){
            $password = $password.rand(0,9);
            }
        }
        # if the symbols box is checked, append a random symbol to the
        # end of the password
        if (null!==$inclSymbol) {
            for($i=1; $i <$numSymbol+1;$i++){
            $password = $password.$symbols[rand(0,5)];
            }
        }

  return view('PwordGen.postindex')->with('password', $password);
  }
}
