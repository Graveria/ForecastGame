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
                    
                    @if (Auth::user()->isAdmin())
                    
                        {{--  Results table results update input fields and submit button  --}}
                        {!! Form::open(['url' => 'results/update/'. $result->id]) !!}
                            <td>
                                <div class="form-group result-input">
                                    {!! Form::text('result1', $result->result1, ['class' => 'form-control']) !!}
                                </div>
                            </td>
                            <td>
                                <div class="form-group result-input">
                                    {!! Form::text('result2', $result->result2, ['class' => 'form-control']) !!}
                                </div>
                            </td>
                            <td>
                                {{--  Can insert result only 2h after game start time --}}
                                @if(now()->subHours(2)>=Carbon\Carbon::parse($result->start_time . ' ' . $result->time))
                                    <div class="form-group result-input">
                                        {!! Form::submit('add', ['class' => 'btn btn-success form-control']) !!}
                                    </div>
                                @endif
                            </td>
                        {!! Form::close() !!}
                    @else
                        <td>{{$result->result1}}</td>
                        <td>{{$result->result1}}</td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection