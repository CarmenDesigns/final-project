@extends('layouts.app')
@section('content');

<h1>Add user</h1>

<form method="post" action="/users">
    @csrf

    Name:<br>
    <input type="text" name="title" id="title" placeholder="name"><br>
    <input type="text" name="email" id="email" placeholder="email"><br>
    <input type="text" name="role" id="role" placeholder="role"><br>
    <input type="submit" value="Add"> <br>
    <a href="{{ url('users') }}">Back</a>

</form>
@endsection