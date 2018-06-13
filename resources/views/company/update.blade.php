@extends('layouts.app')

@section('content');

<form method="post" action="/company/{{$company->id}}">
    @csrf
    <div class="edit">
    <input name="_method" type="hidden" value="PATCH">
        <a href="{{ url('company') }}">Overview</a><br>
    <h1>Company update</h1>

    <input type="text" name="name" id="name" value="{{$company->name}}"><br><br>
    <input type="text" name="description" id="description" value="{{$company->description}}"><br><br>
    <input type="submit" class="update" value="Update">
    </div>
</form>



    @endsection