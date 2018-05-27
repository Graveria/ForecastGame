<?php

namespace App\Http\Controllers;

use App\PointCount;
use Illuminate\Http\Request;
use DB;

class PointCountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Selecting from each players forecasts
        // point summ
        $playerTop = DB::select('select u.name name, sum(f.points) summ
        FROM users u, forecasts f
        WHERE u.id=f.user_id
        GROUP BY name
        ORDER BY summ DESC');

        // Returning the playerTop array 
        // with usernames and point sums to a view
        return view('top', compact('playerTop'));
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
     * @param  \App\PointCount  $pointCount
     * @return \Illuminate\Http\Response
     */
    public function show(PointCount $pointCount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PointCount  $pointCount
     * @return \Illuminate\Http\Response
     */
    public function edit(PointCount $pointCount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PointCount  $pointCount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointCount $pointCount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PointCount  $pointCount
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointCount $pointCount)
    {
        //
    }
}
