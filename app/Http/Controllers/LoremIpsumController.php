<?php

namespace P3\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremIpsumController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }


    public function getCreate() {
        return view('LoremIpsum.create');
    }


    public function postCreate(Request $request) {
      $this->validate(
      $request,
      ['numpara => required|integer|between:1,99']
    );
    return view('LoremIpsum.create')->with(['paragraphs'=>$paragraphs, 'request'=>$request]);
  }
  /**
     * Responds to requests to GET /books/create
     */


    /**
     * Responds to requests to POST /books/create
     */

}
