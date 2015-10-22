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

  <br>
  <a href="/loremipsum"><img src="/images/back.png" class="button" title="Back to Paragraph Generator" alt="homebutton"></a>
  <br>
  <br>
  <?php echo implode('<p>', $paragraphs); ?>
@stop


@section('footer')
  <br>
  <br>
  <a href="/"><img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
@stop
