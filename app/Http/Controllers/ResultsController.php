<?php

namespace App\Http\Controllers;

use App\Results;
use Illuminate\Http\Request;
use DB;
use App\Game;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $resultsAll = DB::select('SELECT t1.abbreviation team1, t2.abbreviation team2,
    //      g.start_time,g.time,g.game_id id, g.result1, g.result2
    //     FROM games g
    //     INNER JOIN teams t1 on g.team1_id = t1.id
    //     INNER JOIN teams t2 on g.team2_id = t2.id');
    //   //  dd($resultsAll);
    //     return view('results', compact('resultsAll'));
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
     * @param  \App\Results  $results
     * @return \Illuminate\Http\Response
     */
    public function show(Results $results)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Results  $results
     * @return \Illuminate\Http\Response
     */
    public function edit(Results $results)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Results  $results
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Results $results)
    {
        // // , compact('userForecast')
        // $update = [
        //     'result1' => request('result1'),
        //     'result2' => request('result2')
        // ];

        // $resultsRow = Game::where('game_id', request('id'))->get();
        // // dd($resultsRow);
        // $resultsRow->result1 = request('result1');
        // $resultsRow->result2 = request('result2');
        // $resultsRow->save();
        
        // return redirect('/results');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Results  $results
     * @return \Illuminate\Http\Response
     */
    public function destroy(Results $results)
    {
        //
    }
}
