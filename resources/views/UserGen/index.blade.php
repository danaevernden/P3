@extends('Layouts.master')

@section('title')
    Create Book
@stop

@section('content')

    <h1>Add a new book</h1>

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form method="POST" action="/usergenerator">

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <fieldset>
            <label for='title'>Title:</label>
            <input type="text" id='title' name="title">
        </fieldset>

        <br>
        <button type="submit" class="btn btn-primary">Add book</button>
    </form>

@stop
