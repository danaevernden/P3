@extends('Layouts.master')

@section('header')
  <div class="banner">
      Paragraph Generator
    <div class="subbanner">
      Latin words, random, yet necessary
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

  <form method='POST' action='/loremipsum'>
      <input type='hidden' value='{{ csrf_token() }}' name='_token'>
      <fieldset>
         <label for='numpara'>Number of paragraphs (max 99):</label>
         <input type="text" id='numpara' name="numpara">
      </fieldset>
   <br>
   <button type="submit" class="btn btn-primary">Generate</button>
  </form>

<?php
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs('numpara');
echo implode('<p>', $paragraphs); ?>

@stop


@section('footer')
<br>
<br>
<a href="/"><img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">

@stop

<!--see lecture notes for adding an if statement-->
