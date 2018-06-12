@extends('layouts.app')
@section('content');
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<div class="title">
<h1>Users</h1>

<a href="{{ url('users/create') }}">Add new<i class="fas fa-user-plus"></i></a>
</div>
@foreach($users as $user)

<div class="container-users">

        <h3>{{$user->name}}</h3>

    <form method="post" action="/users/{{$user->id}}">
        @csrf
        <div class="input">
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete">
        <a href="{{ url("users/$user->id/edit") }}">Edit</a><br><br>
        </div>
    </form>
</div>


@endforeach

@endsection