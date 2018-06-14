@extends('layouts.app')

@section('content');

<form method="post" action="/news/{{$news->id}}">
    @csrf
    <div class="edit">
        <input name="_method" type="hidden" value="PUT">
        <h1>News update</h1>
        <input type="text" name="title" id="title" value="{{$news->title}}"><br><br>
        <input type="text" name="content" id="content" value="{{$news->content}}"><br><br>
       <input type="submit" class="update" value="Update">
    </div>
</form>

@endsection