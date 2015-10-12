@extends('layouts.master')

@section('header')
  <div class="banner">
    Dev's BFF

    <div class="subbanner">
      (That's Best Friend Forever)
    </div>
  </div>
@stop

@section('content')
<div class="Maincontent">
  <div class="subsubbanner">
    Do you wanna build an application?
    <img src="/images/olaf.jpg" class="olaf" title="get it?" alt="olaf"/>

    you'll need some help from the Dev BFF!
  </div>
  <br>

    Need filler text?
    <img src="/images/arrow-left-down-circle.jpg" class="arrow" title="arrow!" alt="leftDown"/>
    <img src="/images/arrow-right-down-circle.jpg" class="arrow" title="arrow!" alt="rightDown"/>
    Need random users?

  <div class="buttons">
    <br>
    Try the Paragraph Generator!
    Try the User Generator!
    <br>
    <a href="/loremipsum"><img src="/images/clickme.png" class="button" title="Click me!" alt="clickme">
    <a href="/usergenerator"><img src="/images/clickme.png" class="button" title="Click me!" alt="clickme">
  </div>
</div>
@stop
