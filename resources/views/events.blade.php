@extends('layouts.master')

@section('content')

    <div class="page-name">
        <h1>Add new event</h1>
    </div>


    {!! Form::open(['url' => 'events']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('start_date', 'Start date:') !!}
            {!! Form::date('start_date', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add event', ['class' => 'btn btn-success form-control']) !!}
        </div>
    {!! Form::close() !!}

@endsection