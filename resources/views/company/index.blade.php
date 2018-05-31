@extends('layouts.app')


@foreach($companies as $company)
    {{$company->name}}

    <form method="post" action="/company/{{$company->id}}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete">
    </form>

@endforeach