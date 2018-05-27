<?php

namespace App\Http\Controllers;

use App\Game;
use Carbon\Carbon;
use App\Event;
use App\Team;
use App\Forecast;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\Results;
use Illuminate\Foundation\Auth\User;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Selecting and passing all game results to results view
        $resultsAll = DB::select('SELECT t1.abbreviation team1, t2.abbreviation team2,
        g.start_time,g.time,g.id id, g.result1, g.result2
       FROM games g
       INNER JOIN teams t1 on g.team1_id = t1.id
       INNER JOIN teams t2 on g.team2_id = t2.id');
     //  dd($resultsAll);
       return view('results', compact('resultsAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Selecting all event names and ids
        $eventList = Event::pluck('name', 'id');
        // Selecting all team names and ids
        $teamList = Team::pluck('name', 'id');

        // dd($eventList);
        return view('games', compact('eventList','teamList'));

        // return view('games', [
        //     'all_teams' => $teams
        // ]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // Saving new game to from input form db
        $insert = [
            'event_id' => request('event_id'), 
            'team1_id' => request('team1_id'),
            'team2_id' => request('team2_id'),
            'start_time' => request('start_time'),
            'time' => Carbon::parse(request('time'))->toTimeString(),
            'result1' => request('result1'),
            'result2' => request('result2')
        ];

        $gameId = Game::create($insert)->id;

        // Slecting all user ids and making 
        // new forecasts for each user for each game
        $usersData = User::all('id')->toArray();
        $usersId = [];
        foreach($usersData as $key =>$value) {

            $forecastInsert = [
                'user_id' => $value['id'],
                'id' => $gameId,
                'forecast_result1' => 0,
                'forecast_result2' => 0,
                'points' => 0,
            ];

            Forecast::create($forecastInsert);   
        }

        return redirect('games');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        // Game result update
        $update = [
            'result1' => request('result1'),
            'result2' => request('result2')
        ];

        $resultsRow = Game::where('id', request('id'))->first();
        $resultsRow->result1 = request('result1');
        $resultsRow->result2 = request('result2');
        
        $resultsRow->save();

        // With every update, inserting in forecast table points
        $forecastsAll = Forecast::where('game_id', request('id'))->get();

        foreach($forecastsAll as $forRow) {
            // Saving points in forecast table
            // foreach user forecast
            $forRow['points'] = Game::pointCount(request('result1'), request('result2'), $forRow['forecast_result1'], $forRow['forecast_result2']); 
            $forRow->save();
        }
        
        return redirect('/results');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
