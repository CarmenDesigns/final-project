@extends('../layout')


@section('title','Home')


@section('content')
    <h1>Events</h1>
    @foreach($events as $data)
        <h2><a href="http://127.0.0.1:8000/blogs/{{$data->id}}">{{$data->title}}</a></h2>
        <p>{{$data->content}}</p>
    @endforeach
@endsection