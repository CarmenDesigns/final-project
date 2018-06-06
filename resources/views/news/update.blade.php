@extends('layouts.app')

@section('content');

<form method="post" action="/news/{{$news->id}}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    News title:<br>
    <input type="text" name="title" id="title" value="{{$news->title}}"><br><br>
    <input type="text" name="content" id="content" value="{{$news->content}}"><br><br>
    <input type="submit" value="Update">
</form>

@endsection