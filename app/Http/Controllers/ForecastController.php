<?php

namespace App\Http\Controllers;

use App\Forecast;
use Illuminate\Http\Request;
use App\Game;
use App\Team;
use Auth;
use DB;

class ForecastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Selecting array with data to show
        // in forecasts table
        // for each player, team names
        // game start time and forecast input fields
        $userForecast = DB::select('select t1.abbreviation team1, t2.abbreviation team2,
        g.start_time, g.time,  f.forecast_result1, f.forecast_result2, f.id
        from forecasts f
        left JOIN games g on f.game_id=g.id
        left JOIN teams t1 on g.team1_id = t1.id
        left JOIN teams t2 on g.team2_id = t2.id
        where f.user_id  = ?', [Auth::id()]);
        
        $gamesList = Game::all();
        $teamsList = Team::pluck('abbreviation', 'id');

        return view('forecasts', compact('userForecast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forecast  $forecast
     * @return \Illuminate\Http\Response
     */
    public function show(Forecast $forecast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forecast  $forecast
     * @return \Illuminate\Http\Response
     */
    public function edit(Forecast $forecast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forecast  $forecast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forecast $forecast)
    {
        // Updating users forecast table results
        $update = [
            'forecast_result1' => request('forecast_result1'),
            'forecast_result2' => request('forecast_result2')
        ];

        // Get forecast id for user
        $foreRow = Forecast::find(request('id'));
        
        $foreRow->forecast_result1 = request('forecast_result1');
        $foreRow->forecast_result2 = request('forecast_result2');
        $foreRow->save();
        
        return redirect('/forecasts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forecast  $forecast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forecast $forecast)
    {
        //
    }
}
