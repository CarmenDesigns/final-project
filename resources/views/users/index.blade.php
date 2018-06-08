@extends('layouts.app')
@section('content');

<h1>Users</h1>

@foreach($users as $user)
    <div class="form">
        <h3>{{$user->name}}</h3>
    </div>



    <form method="post" action="/users/{{$user->id}}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete">
        <a href="{{ url("users/$user->id/edit") }}">Edit</a><br><br>
    </form>
@endforeach

<a href="{{ url('users/create') }}">Add new user</a>



@endsection