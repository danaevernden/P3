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

@if(count($errors) > 0)
  <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
@endif

  <form method='POST' action='/passwordgenerator'>
      <input type='hidden' value='{{ csrf_token() }}' name='_token'>
      <fieldset>
        Number of words (max 9):
        <select name="numWords">
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        <input type="checkbox" name="inclNumber">
         Include a number
         <img src="/images/hatguy.jpg" class="hatguy" alt="hatguy">
         How many
         <select name="numNumber">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
         <br>
         <input type="checkbox" name="inclSymbol">
         Include a special symbol (@!$#%)
         <img src="/images/hatguy.jpg" class="hatguy" alt="hatguy">
         How many
         <select name="numSymbol">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
         <br>
         <input type="checkbox" name="uppercase">
          All uppercase?
         <br><br>
      </fieldset>
   <br>
   <button type="submit" class="btn btn-primary">Generate</button>
  </form>
  <br>
  <br>
  <a href="http://xkcd.com/936/" target="_blank">
    <img src="/images/xkcdcomic.png" title="comic" class="comic" alt ="comic" style="max-width:500px;"/>
  </a>
  <br><br>
  <a href="http://xkcd.com/936/"> xkcd Password Strength comic </a>

@stop

@section('footer')
  <br>
  <br>
  <a href="/">
    <img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
  </a>
@stop
