@extends('layouts.app')
@section('content');

<h1>Add news</h1>

<form method="post" action="/news">
    @csrf

    News title:<br>
    <input type="text" name="title" id="title" placeholder="title"><br>
    Content:<br>
    <input type="text" name="content" id="content" placeholder="content"><br>
    <input type="submit" value="Add"> <br>
    <a href="{{ url('news') }}">Back</a>

</form>
@endsection