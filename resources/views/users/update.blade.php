@extends('layouts.app')

@section('content');

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>


<div class="users">
    <h1>Edit user</h1>
    <ul>
<form method="post" action="/users/{{$users->id}}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    User name:<br>
    <input type="text" name="name" id="name" value="{{$users->name}}"><br><br>
    <input type="submit" value="Update">
</form>

@endsection