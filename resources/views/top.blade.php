@extends('layouts.master')

@section('content')

    <div class="page-name">
        <h1>Players top</h1>
    </div>

    {{--  Table with all users and points they have  --}}
    <div class="player-top">
        <table class="table top">
            <thead class="bg-success">
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