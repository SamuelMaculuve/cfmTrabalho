<?php

namespace App\Http\Controllers;

use App\TrainTravel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TraiTravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('train-travel.index');
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
     * @param  \App\TrainTravel  $trainTravel
     * @return \Illuminate\Http\Response
     */
    public function show(TrainTravel $trainTravel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainTravel  $trainTravel
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainTravel $trainTravel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainTravel  $trainTravel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainTravel $trainTravel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainTravel  $trainTravel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainTravel $trainTravel)
    {
        //
    }
}
