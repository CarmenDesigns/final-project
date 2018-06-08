@extends('layouts.app')

<form method="post" action="/users/{{$user->id}}">
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    User name:<br>
    <input type="text" name="name" id="name" value="{{$user->title}}"><br>
    <br><br>
    <input type="submit" value="Delete">
</form>