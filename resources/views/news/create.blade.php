@extends('layouts.app')
@section('content');

<h1>Add news</h1>

<form method="post" action="/news">
    @csrf
    <div  class="news">
        <ul>
           <li><h5>Company name:</h5></li>
            <li> <input type="text" name="title" id="title" placeholder="title"></li><br>
            <li> <h5>Content:</h5></li>
            <li> <input type="text" name="content" id="content" placeholder="content"></li><br>
            <li><input type="submit" class="add" value="Add"></li> <br>
            <li> <a href="{{ url('news') }}">Back</a></li>
        </ul>
    </div>
</form>
@endsection