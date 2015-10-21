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
    <br>
    <img src="/images/olaf.jpg" class="olaf" title="get it?" alt="olaf"/>
  </div>
  <br>
  <img src="/images/page.png" class="icon" title="icon!" alt="icon"/>
  <br>
  Need filler text? Try the Paragraph Generator!
  <br>
  <a href="/loremipsum"><img src="/images/clickme.png" class="button" title="Click me!" alt="clickme"></a>
  <br>
  <div class="explain">
    Why? Lorem Ipsum is dummy text for designers. Lorem ipsum paragraphs are often used
    when experimenting with text layouts on websites or in print media. The paragraph generator
    will create up to 99 Lorem Ipsum paragraphs of random sizes and characters to be used when
    designing your applications.
  </div>
  <br>
  <br>
  <img src="/images/people.png" class="icon" title="icon!" alt="icon"/>
  <br>
  Need random users? Try the User Generator!
  <br>
  <a href="/usergenerator"><img src="/images/clickme.png" class="button" title="Click me!" alt="clickme"></a>
  <br>
  <div class="explain">
    Why? Users are often needed when creating applications to test forms, data entries, and the like.
    Generate up to 99 users with random first AND last names.
  </div>
</div>
@stop
