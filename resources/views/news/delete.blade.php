@extends('layouts.app')

<form method="post" action="/news/{{$news->id}}">
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    News title:<br>
    <input type="text" name="name" id="name" value="{{$news->title}}"><br>
    <br><br>
    <input type="submit" value="Delete">
</form>