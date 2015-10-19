@extends('Layouts.master')


@section('content')

    @if(!isset($title))
        You have not specified a book
    @else
        <h1>Show book: {{ $title }}</h1>
    @endif

@stop
