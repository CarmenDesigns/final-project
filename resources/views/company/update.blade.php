@extends('layouts.app')

<form method="post" action="/final/public/company/{{$company->id}}">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    Company name:<br>
    <input type="text" name="name" id="name" value="{{$company->name}}"><br><br>
    <input type="submit" value="Edit">
</form>