@extends('layout')


@section('title','Update')

@section('content')
    @if(isset($succeed) && $succeed[0] == true)
        <div class="alert alert-success">
            Blog {{$succeed[1]}} succesvol upgedate!
        </div>
    @endif
    <h2>{{$n->title}}</h2>
    <p>{{$n->content}}</p>

    {!! Form::open(['url' => "news/$news->id",'method'=>'POST']) !!}

    {!! Form::token() !!}
    {{method_field('PATCH')}}
    {!! Form::label('title','naam:') !!}
    {!! Form::text('title') !!}
    {!! Form::label('content','inhoud:') !!}
    {!! Form::textarea('content') !!}
    {!! Form::submit('Update the news!', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}
@endsection