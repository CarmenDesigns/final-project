@extends('layouts.app')
@section('content');

<h1>Add a new company</h1>

<form method="post" action="/company">
    @csrf

    Company name:<br>
    <input type="text" name="name" id="name" placeholder="name"><br>
    Description:<br>
    <input type="text" name="description" id="description" placeholder="description"><br>
    <input type="submit" value="Add"> <br>
    <a href="{{ url('company') }}">Back</a>

</form>
@endsection