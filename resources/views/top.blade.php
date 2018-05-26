@extends('layouts.master')

@section('content')

    <div class="page-name">
        <h1>Players top</h1>
    </div>

    <div class="player-top">
        <table class="table results">
            <thead class="bg-warning">
                <tr>
                    <th scope="col">Place</th>
                    <th scope="col">Name</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>
            <tbody>
                <?php $i =  1 ?>
                @foreach($playerTop as $player)
                
                <tr>
                    <td>{{ $i ++ }}</td>
                    <td>{{ $player->name}}</td>
                    <td>{{ $player->summ}}</td>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection