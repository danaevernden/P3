@extends('Layouts.master')

@section('header')
  <div class="banner">
      User Generator
    <div class="subbanner">
      Fake, random, yet necessary
    </div>
  </div>
@stop

@section('content')
  <a href="/usergenerator"><img src="/images/back.png" class="button" title="Back to User Generator" alt="homebutton"></a>
  <br>
  <br>
  <?php
  echo $newstring;?>
@stop

@section('footer')
  <br>
  <br>
  <a href="/">
    <img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
  </a>
@stop
