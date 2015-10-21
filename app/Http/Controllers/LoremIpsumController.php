<?php

namespace P3\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Badcow\LoremIpsum as Lipsum;

class LoremIpsumController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    public function getCreate() {
        return view('LoremIpsum.create');
    }

    public function postIndex(Request $request) {

      /*validation*/
      $this->validate($request,[
        'numpara' => 'required|integer|between:1,99'
        ]);
        $input=$request->input('numpara');

        /*paragraph generation*/
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($input);
        return view('LoremIpsum.index')->with('paragraphs', $paragraphs);

  }
}
