@extends('Layouts.master')

@section('header')
  <div class="banner">
    <div class="bannermaster">
    Do you wanna build an application?
  </div>
    <div class="subbanner">
      You'll need the Dev BFF!
    </div>
  </div>
@stop

@section('content')
<div class="Maincontent">
  <div class="subsubbanner">
    (That's best friend forever)
    <img src="/images/olaf.jpg" class="olaf" title="get it?" alt="olaf"/>
  </div>
  <br>

    Need filler text?
    <img src="/images/arrow-left-down-circle.jpg" class="arrow" title="arrow!" alt="leftDown"/>
<img src="/images/arrow-down-circle.jpg" class="arrow2" title="arrow!" alt="downDown"/>
    <img src="/images/arrow-right-down-circle.jpg" class="arrow" title="arrow!" alt="rightDown"/>

    Need random passwords?
    <br>
    Need random users?

  <div class="buttons">
    <br>
    Try the Paragraph Generator!
    Try the Password Generator!
    Try the User Generator!
    <br>
    <a href="/loremipsum"><img src="/images/clickme.png" class="button" title="Click me!" alt="clickme">
    <a href="/pwordgenerator"><img src="/images/clickme.png" class="button" title="Click me!" alt="clickme">
    <a href="/usergenerator"><img src="/images/clickme.png" class="button" title="Click me!" alt="clickme">
  </div>
</div>
@stop
