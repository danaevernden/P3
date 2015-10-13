<?php

namespace P3\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P3\Http\Controllers\Controller;

class PwordGenController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        return view('PwordGen.index');
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
     public function getShow() {

     }


    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        return 'Form to create a new book';
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return 'Process adding new book';
    }
}