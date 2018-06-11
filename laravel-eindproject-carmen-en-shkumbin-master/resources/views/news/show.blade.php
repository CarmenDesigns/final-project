@extends('../layout')

<?php ?>
@section('title',$blog->title)


@section('content')
<h2>{{$blog->title}}</h2>
<p>{{$blog->content}}</p>
<a class="fa fa-pencil" href="http://127.0.0.1:8000/news/{{$news->id}}/edit">edit</a>
{!! Form::open(['url' => "news/$news->id",'method'=>'POST']) !!}
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