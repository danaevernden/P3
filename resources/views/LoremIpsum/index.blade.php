@extends('layouts.master')

@section('header')
  <div class="banner">
      Paragraph Generator
    <div class="subbanner">
      Latin words, random, yet necessary
    </div>
  </div>
@stop

@section('content')
<?php
function keepselection($number, $selectionName){
      if(isset($_GET[$selectionName]) and $_GET[$selectionName]==$number)
      {echo "selected='selected'";}
    }

function keepselectionB($selectionName2){
  if(isset($_GET[$selectionName2]))
  {echo "checked='checked'";}
}
?>

  <form method='GET' action='index.php' name='numPara'>
      Number of paragraphs:
      <br> <br>
      <input type="submit" value="Generate">
  </form>
@stop

@section('body')
@stop

@section('footer')
<br>
<br>
<a href="/"><img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">

@stop

<!--see lecture notes for adding an if statement-->
