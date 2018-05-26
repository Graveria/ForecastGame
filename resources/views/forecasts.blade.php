@extends('layouts.master')

@section('content')
    <div class="page-name">
        <h1>Forecasts</h1>
    </div>

    <table class="table forecasts">
        <thead class="bg-success">
            <tr>
                <th scope="col">Team 1</th>
                <th scope="col">Team 2</th>
                <th scope="col">Start date</th>
                <th scope="col">Start time</th>
                <th scope="col">T1 result</th>
                <th scope="col">T2 result</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($userForecast as $forecast)
            <tr>
                <td>{{$forecast->team1}}</td>
                <td>{{$forecast->team2}}</td>
                <td>{{$forecast->start_time}}</td>
                <td>{{$forecast->time}}</td>
                
                {!! Form::open(['url' => 'forecasts/update/'. $forecast->id]) !!}
                <td>
                    <div class="form-group forecast-input">
                        {!! Form::text('forecast_result1', $forecast->forecast_result1, ['class' => 'form-control']) !!}
                    </div>
                    {{--  {!! Form::close() !!}  --}}
                </td>
                <td>
                    {{--  {!! Form::open(['url' => 'forecasts/update/'. $forecast->id]) !!}  --}}
                        
                    <div class="form-group forecast-input">
                        {!! Form::text('forecast_result2', $forecast->forecast_result2, ['class' => 'form-control']) !!}
                    </div>
                    {{--  {!! Form::close() !!}  --}}
                </td>
                <td>
                    {{--  {!! Form::open(['url' => 'forecasts/update/'. $forecast->id]) !!}  --}}
                    
                        <div class="form-group forecast-input">
                            {!! Form::submit('add', ['class' => 'btn btn-success form-control']) !!}
                        </div>
                </td>
                {!! Form::close() !!}                        
                
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection