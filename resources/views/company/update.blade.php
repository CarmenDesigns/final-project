@extends('layouts.app')

@section('content');

<form method="post" action="/company/{{$company->id}}">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    Company name:<br>
    <input type="text" name="name" id="name" value="{{$company->name}}"><br><br>
    <input type="text" name="description" id="description" value="{{$company->description}}"><br><br>
    <input type="submit" value="Update">
</form>
<a href="{{ url('company') }}">Overview</a>

    @endsection