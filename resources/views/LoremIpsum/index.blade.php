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
  <br>
  <a href="/"><img src="/images/back.png" class="button" title="Back to Paragraph Generator" alt="homebutton"></a>
  <br>
  <br>
  <?php echo implode('<p>', $paragraphs); ?>
@stop


@section('footer')
  <br>
  <br>
  <a href="/"><img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
@stop
