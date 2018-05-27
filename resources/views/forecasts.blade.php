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
                <th scope="col">T1 forecast</th>
                <th scope="col">T2 forecast</th>
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
                
                {{--  User forecast table forecast input fields with submit button  --}}
                {!! Form::open(['url' => 'forecasts/update/'. $forecast->id]) !!}
                    <td>
                        <div class="form-group forecast-input">
                            {!! Form::text('forecast_result1', $forecast->forecast_result1, ['class' => 'form-control']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="form-group forecast-input">
                            {!! Form::text('forecast_result2', $forecast->forecast_result2, ['class' => 'form-control']) !!}
                        </div>
                    </td>
                    <td>
                        {{--  Can place bets till game start time - 15 minutes  --}}
                        @if(now()->addMinutes(15)<=Carbon\Carbon::parse($forecast->start_time . ' ' . $forecast->time))
                            <div class="form-group forecast-input">
                                {!! Form::submit('add', ['class' => 'btn btn-success form-control']) !!}
                            </div>
                        @endif
                    </td>
                    
                {!! Form::close() !!}                        
                
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection