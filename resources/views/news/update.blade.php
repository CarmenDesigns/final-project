@extends('layouts.app')

@section('content');

<form method="post" action="/news/{{$news}}">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    News title:<br>
    <input type="text" name="name" id="name" value=""><br><br>
    <input type="submit" value="Update">
</form>

@endsection