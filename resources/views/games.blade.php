@extends('layouts.master')

@section('content')

    <div class="page-name">
        <h1>Add new game</h1>
    </div>


    {!! Form::open(['url' => 'games']) !!}
        <div class="form-group">
            {!! Form::label('event_id', 'Event:') !!}
            {!! Form::text('event_id', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('team1_id', 'Team 1:') !!}
            {!! Form::text('team1_id', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('team2_id', 'Team 2:') !!}
            {!! Form::text('team2_id', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('start_time', 'Start time:') !!}
            {!! Form::date('start_time', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('result1', 'Result 1:') !!}
            {!! Form::text('result1', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('result2', 'Result 2:') !!}
            {!! Form::text('result2', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add game', ['class' => 'btn btn-success form-control']) !!}
        </div>
    {!! Form::close() !!}

@endsection