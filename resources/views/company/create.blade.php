@extends('layouts.app')
@section('content');

<h1>Add a new company</h1>

<form method="post" action="/company">
    @csrf
    <div class="companies">
        <ul>
       <li> <h5>Company name:</h5></li>

               <li> <input type="text" name="name" id="name" placeholder="name"></li><br>
                <li> <h5>Description</h5></li>
                <li><input type="text" name="description" id="description" placeholder="description"></li><br>
                <div class="input">
                    <li><input type="submit" class="add" value="Add"></li> <br>
                    <li><a href="{{ url('company') }}">Back</a></li>
                </div>
            </ul>
    </div>
</form>
@endsection