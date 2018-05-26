@extends('layouts.master')

@section('content')
    <div class="page-name">
        <h1>Results</h1>
    </div>

    <table class="table results">
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
            @foreach($resultsAll as $result)
            <tr>
                <td>{{$result->team1}}</td>
                <td>{{$result->team2}}</td>
                <td>{{$result->start_time}}</td>
                <td>{{$result->time}}</td>
                
                {!! Form::open(['url' => 'results/update/'. $result->id]) !!}
                <td>
                    <div class="form-group result-input">
                        {!! Form::text('result1', $result->result1, ['class' => 'form-control']) !!}
                    </div>
                    {{--  {!! Form::close() !!}  --}}
                </td>
                <td>
                    {{--  {!! Form::open(['url' => 'results/update/'. $result->id]) !!}  --}}
                        
                    <div class="form-group result-input">
                        {!! Form::text('result2', $result->result2, ['class' => 'form-control']) !!}
                    </div>
                    {{--  {!! Form::close() !!}  --}}
                </td>
                <td>
                    {{--  {!! Form::open(['url' => 'results/update/'. $result->id]) !!}  --}}
                    
                        <div class="form-group result-input">
                            {!! Form::submit('add', ['class' => 'btn btn-success form-control']) !!}
                        </div>
                </td>
                {!! Form::close() !!}
                
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection