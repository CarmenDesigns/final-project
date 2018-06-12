@extends('layouts.app')

@section('content')
        <!doctype html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="welcome">
         <h1 style="text-align: center;  margin-top:50px;">Welcome {{ Auth::user()->name }}</h1>

    </div>

<div class="container-info">
    <div class="column">
        <h2>Personal information</h2>
        <ul>
            <li>First name:</li>
            <li>Last name:</li>
            <li>Date of birth:</li>
            <li>Address:</li>
            <li>E-mail address:</li>
            <li>Phone number:</li>
        </ul>
    </div>


    <div class="column">
        <h2>Workshops</h2>
    </div>


    <div class="column">
        <div class="column-jobs">
            <h2>Recent applications</h2>
        </div>
    </div>

</div>
@endsection
