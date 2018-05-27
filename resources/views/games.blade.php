@extends('layouts.master')

@section('content')

    <div class="page-name">
        <h1>Add new game</h1>
    </div>

    {{--  New game creation form  --}}
    {!! Form::open(['url' => 'games']) !!}

        {{--  Event select field  --}}
        <div class="form-group">
            {!! Form::label('event_id', 'Event:') !!}
            {!! Form::select('event_id', $eventList, null, ['class' => 'form-control','required' => 'required']) !!}                    
        </div>

        {{--  Team 1 select field  --}}
        <div class="form-group">
            {!! Form::label('team1_id', 'Team 1:') !!}
            {!! Form::select('team1_id', $teamList, null, ['class' => 'form-control','required' => 'required']) !!}
        </div>

        {{--  Team 2 select field  --}}
        <div class="form-group">
            {!! Form::label('team2_id', 'Team 2:') !!}
            {!! Form::select('team2_id', $teamList, null, ['class' => 'form-control','required' => 'required']) !!}
        </div>

        {{--  Game start date  --}}
        <div class="form-group">
            {!! Form::label('start_time', 'Start time:') !!}
            {!! Form::date('start_time', '', ['class' => 'form-control','required' => 'required']) !!}
        </div>

        {{--  Game start time  --}}
        <div class="form-group">
            {!! Form::label('time', 'Time:') !!}
            {!! Form::time('time', '', ['class' => 'form-control','required' => 'required']) !!}
        </div>

        {{--  Result for T1  --}}
        <div class="form-group">
            {!! Form::label('result1', 'Result 1:') !!}
            {!! Form::text('result1', '', ['class' => 'form-control','required' => 'required']) !!}
        </div>

        {{--  Result for T2  --}}        
        <div class="form-group">
            {!! Form::label('result2', 'Result 2:') !!}
            {!! Form::text('result2', '', ['class' => 'form-control','required' => 'required']) !!}
        </div>

        {{--  Submit button  --}}
        <div class="form-group">
            {!! Form::submit('Add game', ['class' => 'btn btn-success form-control']) !!}
        </div>

    {!! Form::close() !!}

@endsection