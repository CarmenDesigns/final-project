@extends('layouts.app')
@section('content');



<h1>Company overview</h1>

@foreach($companies as $company)
    <div class="form">
    <h3>{{$company->name}}</h3>

    <p>{{$company->description}}</p>
    </div>
    <form method="post" action="/company/{{$company->id}}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete">
        <a href="{{ url("company/$company->id/edit") }}">Edit</a><br><br>
    </form>
@endforeach

@if (session()->has('success'))
    <h1>Company successfully deleted!</h1>
@endif

<a href="{{ url('company/create') }}">Add new company</a>

    @endsection