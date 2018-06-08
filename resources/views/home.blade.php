@extends('layouts.app')

@section('content')
        <!doctype html>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

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

<div style="display:flex; justify-content: space-around; margin-top: 50px; " class="container">
    <div style="height: 500px; width:250px;" class="column">
        <h2>My information</h2>
    </div>

    <div style="height: 500px; width: 250px;" class="column">
        <h2>My favorites</h2>
    </div>

    <div style="height: 500px; width: 250px;" class="column">
        <h2>Workshops</h2>
    </div>
</div>

@endsection
