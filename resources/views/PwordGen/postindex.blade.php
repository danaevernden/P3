@extends('Layouts.master')

@section('header')
  <div class="banner">
      Password Generator
    <div class="subbanner">
      Random, yet necessary
    </div>
  </div>
@stop

@section('content')
  <a href="/passwordgenerator"><img src="/images/back.png" class="button" title="Back to Paragraph Generator" alt="homebutton"></a>
  <br>
  <br>
  <div class="passwordbox">
    <?php echo $password;?>
  </div>
@stop

@section('footer')
  <br>
  <br>
  <a href="/">
    <img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
  </a>
@stop
