@extends('layouts.app')

<form method="post" action="/company/{{$company->id}}">
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    Company name:<br>
    <input type="text" name="name" id="name" value="{{$company->name}}"><br>
  <br><br>
    <input type="submit" value="Delete">
</form>