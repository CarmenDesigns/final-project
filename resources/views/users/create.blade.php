@extends('layouts.app')
@section('content');

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>


<form method="post" action="/users">
    @csrf
    <div class="users">
        <h1>Add a new user</h1>
        <ul>
            <li> <input type="text" name="name" id="name" placeholder="name"></li> <br>
            <li> <input type="text" name="email" id="email" placeholder="email"></li> <br>
            {{--<li> <input type="text" name="role" id="role" placeholder="role"></li><br>--}}
            <select role="role">
                <option value = "">Select role</option>
                <option value = "company user">Company user</option>
                <option value = "job seeker">Job seeker</option>
            </select> <br><br>

            <div class="input">
                <li> <input type="submit" value="Add"></li><br>
                <li>  <a href="{{ url('users') }}">Back</a></li>
            </div>
        </ul>
    </div>

</form>
@endsection