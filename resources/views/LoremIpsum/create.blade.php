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

{{old('numpara')}}
  <form method='POST' action='/loremipsum'>
      <input type='hidden' value='{{ csrf_token() }}' name='_token'>
      <fieldset>
         <label for='numpara'>Number of paragraphs (max 99):</label>
         <input type="text" id='numpara' name="numpara">
      </fieldset>
   <br>
   <button type="submit" class="btn btn-primary">Generate</button>
  </form>
  <br>
  <br>
@stop

@section('footer')
  <br>
  <br>
  <a href="/"><img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
@stop
