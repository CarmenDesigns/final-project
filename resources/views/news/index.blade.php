@extends('layouts.app')
@section('content');
<style>


</style>


<h1>News overview</h1>

@foreach($news as $new)
    <div class="form">
        <h3>{{$new->title}}</h3>

        <p>{{$new->content}}</p>
    </div>
    <form method="post" action="/news/{{$new->id}}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete">
        <a href="{{ url("news/$new->id/edit") }}">Edit</a><br><br>
    </form>
@endforeach

<a href="{{ url('news/create') }}">Add news</a>

@endsection