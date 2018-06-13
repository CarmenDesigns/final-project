@extends('layouts.app')
@section('content');


<div class="title">
<h1>Companies overview</h1>
<a href="{{ url('company/create') }}">Add new company</a>
</div>

@foreach($companies as $company)
    <div class="company">
        <div class="head">
            <a href="#"> <h3>{{$company->name}}</h3></a>
        </div>

        <div class="description">
            <p>{{$company->description}}</p>
        </div>
        <form method="post" action="/company/{{$company->id}}">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <input type="submit" value="Delete">
            <a href="{{ url("company/$company->id/edit") }}">Edit</a><br><br>
        </form>
    </div>

@endforeach
    @endsection