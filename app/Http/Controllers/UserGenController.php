<?php

namespace P3\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserGenController extends Controller {

    public function getIndex() {

        return view('UserGen.index'); 
    }

    public function postIndex() {
      return 'i will get a user';
       }

    /**
     * Responds to requests to GET /books/show/{id}
     */

}
