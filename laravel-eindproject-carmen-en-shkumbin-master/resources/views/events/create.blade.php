
@extends('../layout')

@section('title','Create')
@section('content')

    @if(isset($succeed) && $succeed[0] == true)
        <div class="alert alert-success">
           Events{{$succeed[1]}} succesvol aangemaakt!
        </div>
    @endif

    {!! Form::open(['url' => 'events','method'=>'POST']) !!}

    {!! Form::token() !!}
    <div class="col-12">

        {!! Form::label('title','name:') !!}
        {!! Form::text('title') !!}
        {!! Form::label('content','inhoud:') !!}
        {!! Form::textarea('content') !!}
        {!! Form::submit('Create the Blog!', array('class' => 'btn btn-primary')) !!}
        {!! Form::close() !!}

    </div>
0
@endsection