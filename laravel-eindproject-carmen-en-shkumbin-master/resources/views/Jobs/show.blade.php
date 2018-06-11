@extends('../layout')

<?php ?>
@section('title',$blog->title)


@section('content')
    <h2>{{$jobs->title}}</h2>
    <p>{{$jobs->content}}</p>
    <a class="fa fa-pencil" href="http://127.0.0.1:8000/news/{{$news->id}}/edit">edit</a>
    {!! Form::open(['url' => "jobs/$jobs->id",'method'=>'POST']) !!}
    {!! Form::token() !!}
    {{method_field('DELETE')}}
    <button type="submit" id="completed-task" class="fabutton">
        <i class="fa fa-trash">delete</i>
    </button>
    {!! Form::close() !!}


    <style>
        .fabutton {
            background: none;
            padding: 0;
            border: none;
        }</style>
@endsection