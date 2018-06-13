@extends('layouts.app')
@section('content');
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<div class="title">
<h1>Users</h1>

<a href="{{ url('users/create') }}">Add new<i class="fas fa-user-plus"></i></a>
    <div class="search">
        <a> <input type="text" class="search-field" id="link_box" placeholder="Search for names.."></a>
        <button id="search-button" value="search" onclick="window.location = document.getElementById('link_box').value;"><i class="fas fa-search"></i></button>
        {{--<input type="button" id="search-button" value="search" onclick="window.location = document.getElementById('link_box').value;">--}}
        <div id="results"></div>
    </div>
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

<script type="text/javascript">
    document.getElementById("search-button").addEventListener("click", function(){
        window.location = document.getElementById('link_box').value;
    });

</script>

@endforeach

@endsection