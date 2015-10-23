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

  @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  @endif

  <form method='POST' action='/usergenerator'>
      <input type='hidden' value='{{ csrf_token() }}' name='_token'>
      <fieldset>
         Number of users (max 99):
         <input type="text" name="numUsers">
         Include city
         <select name="inclCity">
           <option value="1">Nah</option>
           <option value="2">Yeah!</option>
          </select>
          Include State
          <select name="inclState">
          <option value="1">Nah</option>
          <option value="2">Yeah!</option>
        </select>
      </fieldset>
   <br>
   <button type="submit" class="btn btn-primary">Generate</button>
  </form>
@stop

@section('footer')
  <br>
  <br>
  <a href="/">
    <img src="/images/homebutton.png" class="button" title="Back to home" alt="homebutton">
  </a>
@stop
