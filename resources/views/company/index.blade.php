@extends('layouts.app')
@section('content');

<h1>Company overview</h1>

@foreach($companies as $company)
    {{$company->name}}

    <form method="post" action="/company/{{$company->id}}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete">
        <a href="{{ url('company/update') }}">Edit</a><br><br>
    </form>
@endforeach

<a href="{{ url('company/create') }}">Add new company</a>

    @endsection