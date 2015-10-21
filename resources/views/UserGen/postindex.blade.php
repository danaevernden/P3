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
  <a href="/usergenerator"><img src="/images/back.png" class="button" title="Back to Paragraph Generator" alt="homebutton"></a>
  <br>
  <br>
  <?php
  $newstring='';
    for ($i=0; $i < 7; $i++) /*change counter*/{
      $newstring=$newstring.$myfakes['name'][$i].'<br> ';
      if(isset($inclState)){
        $newstring=$newstring.$myfakes['city'][$i];
      }
      elseif(isset($inclCity)){
      $newstring= $newstring.', '.$myfakes['stateAbbr'][$i].'<br><br>';
    }
  }
  echo $newstring;
   ?>
@stop

@section('footer')
  <br>
  <br>
  <a href="/"><img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
@stop
