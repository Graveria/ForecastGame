<?php

namespace App\Http\Controllers;

use App\Game;
use Carbon\Carbon;
use App\Event;
use App\Team;
use App\Forecast;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Selectin all event names and ids
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
        $insert = [
            'event_id' => request('event_id'), 
            'team1_id' => request('team1_id'),
            'team2_id' => request('team2_id'),
            'start_time' => request('start_time'),
            'time' => Carbon::parse(request('time'))->toTimeString(),
            'result1' => request('result1'),
            'result2' => request('result2')
        ];

        Game::create($insert);

        $forecastInsert = [

        ];

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
        //
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
