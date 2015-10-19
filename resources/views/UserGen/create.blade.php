@extends('Layouts.master')

@section('head')
@stop

@section('header')
  <div class="banner">
      User Generator

    <div class="subbanner">
      Fake, random, yet necessary
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

  <form method='GET' action='index.php' name='numWords'>
      Include Profession
      <input type="checkbox" name="inclProf"
      <?php keepselectionB('inclProf') ?>
      <br> <br>
      Include Birthday
      <input type="checkbox" name="inclBirth"
      <?php keepselectionB('inclBirth') ?>
      <br> <br>
      Men and/or Women?
      <select name="genders">
        <option value="1"
        <?php keepselection(1, 'genders') ?>
        >Men</option>
        <option value="2"
        <?php keepselection(2, 'genders') ?>
        >Women</option>
        <option value="3"
        <?php keepselection(3, 'genders') ?>
        >Men and Women</option>
      </select>
      <br>
      Personal Title (ex. Mr, Ms, esq.)
      <input type="checkbox" name="inclTitle"
      <?php keepselectionB('inclTitle') ?>
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
