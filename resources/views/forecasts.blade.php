@extends('layouts.master')

@section('content')
    <div class="page-name">
        <h1>Forecasts</h1>
    </div>

    <table class="table forecasts">
        <thead class="bg-danger">
            <tr>
                <th scope="col">#</th>

                <th scope="col">Team 1</th>
                <th scope="col">Team 2</th>
                <th scope="col">Start</th>
                <th scope="col">T1 win</th>
                <th scope="col">T2 win</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>

                <td>BRA</td>
                <td>SWE</td>
                <td>2018.05.12</td>
                <td>
                    <label class="radio-inline">
                        <input type="radio" id="forecast-1" value="forecast-1" name="1" required>
                    </label>
                </td>
                <td>
                    <label class="radio-inline">
                        <input type="radio" id="forecast-2" value="forecast-2" name="1" required>
                    </label>
                </td>
            </tr>
        </tbody>
    </table>
@endsection