@extends('layouts.app')

@section('content');

<form method="post" action="/company/">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    Company name:<br>
    <input type="text" name="name" id="name" value=""><br><br>
    <input type="submit" value="Update">
</form>

    @endsection