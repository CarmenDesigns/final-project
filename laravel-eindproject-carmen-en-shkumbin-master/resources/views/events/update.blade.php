@extends('layout')


@section('title','Update')

@section('content')
    @if(isset($succeed) && $succeed[0] == true)
        <div class="alert alert-success">
            Events {{$succeed[1]}} succesvol upgedate!
        </div>
    @endif
    <h2>{{$events->title}}</h2>
    <p>{{$events>content}}</p>

    {!! Form::open(['url' => "events/$blog->id",'method'=>'POST']) !!}

    {!! Form::token() !!}
    {{method_field('PATCH')}}
    {!! Form::label('title','naam:') !!}
    {!! Form::text('title') !!}
    {!! Form::label('content','inhoud:') !!}
    {!! Form::textarea('content') !!}
    {!! Form::submit('Update the Events!', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}
@endsection