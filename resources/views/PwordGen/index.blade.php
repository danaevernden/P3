@extends('Layouts.master')

@section('header')
  <div class="banner">
      Password Generator

    <div class="subbanner">
      Fake, random, yet necessary
    </div>
  </div>
@stop

@section('content')
<div class="containerpword">
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
            Number of words
            <select name="numWords">
              <option value="3"
              <?php keepselection(3, 'numWords') ?>
              >3</option>
              <option value="4"
                <?php keepselection(4, 'numWords') ?>
              >4</option>
              <option value="5"
                <?php keepselection(5, 'numWords') ?>
              >5</option>
              <option value="6"
                <?php keepselection(6 ,'numWords') ?>
              >6</option>
              <option value="7"
                <?php keepselection(7, 'numWords') ?>
              >7</option>
              <option value="8"
                <?php keepselection(8, 'numWords') ?>
              >8</option>
              <option value="9"
              <?php keepselection(9, 'numWords') ?>
              >9</option>
            </select>
            <br>
            <input type="checkbox" name="inclNumber"
            <?php keepselectionB('inclNumber') ?>
            >
            Include a number
            <img src="/images/hatguy.jpg" class="hatguy" alt="hatguy">
            How many
            <select name="numNumber">
              <option value="1"
              <?php keepselection(1, 'numNumber') ?>
              >1</option>
              <option value="2"
                <?php keepselection(2, 'numNumber') ?>
              >2</option>
              <option value="3"
                <?php keepselection(3, 'numNumber') ?>
              >3</option>
              <option value="4"
                <?php keepselection(4, 'numNumber') ?>
              >4</option>
              <option value="5"
                <?php keepselection(4, 'numNumber') ?>
              >5</option>
            </select>
            <br>
            <input type="checkbox" name="inclSymbol"
            <?php keepselectionB('inclSymbol') ?>
            >
            Include a special symbol (@!$#%)
            <img src="/images/hatguy.jpg" class="hatguy" alt="hatguy">
            How many
            <select name="numSymbol">
              <option value="1"
              <?php keepselection(1, 'numSymbol') ?>
              >1</option>
              <option value="2"
                <?php keepselection(2, 'numSymbol') ?>
              >2</option>
              <option value="3"
                <?php keepselection(3, 'numSymbol') ?>
              >3</option>
              <option value="4"
                <?php keepselection(4, 'numSymbol') ?>
              >4</option>
              <option value="5"
                <?php keepselection(5, 'numSymbol') ?>
              >5</option>
            </select>
            <br>
            <input type="checkbox" name="uppercase"
            <?php keepselectionB('uppercase') ?>
            >
             All uppercase?
            <br>
            <input type="submit" value="Generate">
            <br><br>
        </form>
    <br>
    <a href="http://xkcd.com/936/" target="_blank">
      <img src="/images/xkcd comic.png" title="comic" class="comic" alt ="comic" style="max-width:500px;"/>
    </a>
    <br><br>
    <a href="http://xkcd.com/936/"> xkcd Password Strength comic </a>
    <br>
</div>

@stop

@section('footer')
<br>
<br>
<a href="/"><img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
@stop
<!--see lecture notes for adding an if statement-->
