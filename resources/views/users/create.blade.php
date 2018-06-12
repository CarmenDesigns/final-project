@extends('layouts.app')
@section('content');



<form method="post" action="/users">
    @csrf
    <div class="users">
        <h1>Add a new user</h1>
        <ul>
            <li> <input type="text" name="name" id="name" placeholder="name"></li> <br>
            <li> <input type="text" name="email" id="email" placeholder="email"></li> <br>
            {{--<li> <input type="text" name="role" id="role" placeholder="role"></li><br>--}}
            <select role="role">
                <option value = "">Select role</option>
                <option value = "company user">Company user</option>
                <option value = "job seeker">Job seeker</option>
            </select> <br><br>


            <li> <input type="submit" value="Add"></li><br>
            <li>  <a href="{{ url('users') }}">Back</a></li>
        </ul>
    </div>

</form>
@endsection