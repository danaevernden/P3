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
<?php function keepselection($number, $selectionName){
      if(isset($_GET[$selectionName]) and $_GET[$selectionName]==$number)
      {echo "selected='selected'";}
    }
      function keepselectionB($selectionName2){
        if(isset($_GET[$selectionName2]))
        {echo "checked='checked'";}
    }
?>
  <form method='POST' action='/usergenerator'>
      <input type='hidden' value='{{ csrf_token() }}' name='_token'>
      <fieldset>
         <label for='numUsers'>Number of users (max 99):</label>
         <input type="text" id='numUsers' name="numUsers">
         <input type="checkbox" name="inclCity"
         <?php keepselectionB('inclCity') ?>
         >
         Include city
         <input type="checkbox" name="inclState"
         <?php keepselectionB('inclState') ?>
         >
         Include state
      </fieldset>
   <br>
   <button type="submit" class="btn btn-primary">Generate</button>
  </form>
@stop

@section('footer')
  <br>
  <br>
  <a href="/"><img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
@stop
