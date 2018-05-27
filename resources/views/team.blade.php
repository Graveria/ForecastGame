@extends('layouts.master')

@section('content')

    <div class="page-name">
        <h1>Add new team</h1>
    </div>

    {{--  Team create form  --}}
    {!! Form::open(['url' => 'team']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', '', ['class' => 'form-control','required' => 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('abbreviation', 'Abbreviation:') !!}
            {!! Form::text('abbreviation', '', ['class' => 'form-control','required' => 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add team', ['class' => 'btn btn-success form-control']) !!}
        </div>
    {!! Form::close() !!}

@endsection