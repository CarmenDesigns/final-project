@extends('layouts.app')

@section('content');

<form method="post" action="/users/{{$users->id}}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    User name:<br>
    <input type="text" name="name" id="name" value="{{$users->name}}"><br><br>
    <input type="submit" value="Update">
</form>

@endsection