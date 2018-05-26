@extends('layouts.master')

@section('content')
    <div class="page-name">
        <h1>Forecasts</h1>
    </div>

    <table class="table forecasts">
        <thead class="bg-success">
            <tr>
                <th scope="col">#</th>
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
            <tr>
                <th scope="row">1</th>

                <td>BRA</td>
                <td>SWE</td>
                <td>2018.05.12</td>
                <td>2018.05.12</td>
                <td>
                    {!! Form::open(['url' => 'forecasts']) !!}
                    <div class="form-group forecast-input">
                        {!! Form::text('forecast_result1', '', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['url' => 'forecasts']) !!}
                        
                    <div class="form-group forecast-input">
                        {!! Form::text('forecast_result2', '', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['url' => 'forecasts']) !!}
                    
                        <div class="form-group forecast-input">
                            {!! Form::submit('add', ['class' => 'btn btn-success form-control']) !!}
                        </div>
                    {!! Form::close() !!}                        
                </td>
            </tr>

            <tr>
                    <th scope="row">1</th>
    
                    <td>BRA</td>
                    <td>SWE</td>
                    <td>2018.05.12</td>
                    <td>2018.05.12</td>
                    <td>
                        {!! Form::open(['url' => 'forecasts']) !!}
                        <div class="form-group forecast-input">
                            {!! Form::text('forecast_result1', '', ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['url' => 'forecasts']) !!}
                            
                        <div class="form-group forecast-input">
                            {!! Form::text('forecast_result2', '', ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['url' => 'forecasts']) !!}
                        
                            <div class="form-group forecast-input">
                                {!! Form::submit('add', ['class' => 'btn btn-success form-control']) !!}
                            </div>
                        {!! Form::close() !!}                        
                    </td>
                </tr>
        </tbody>
    </table>
@endsection