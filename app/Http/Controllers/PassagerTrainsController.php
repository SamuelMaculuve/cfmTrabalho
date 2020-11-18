<?php

namespace App\Http\Controllers;

use App\PassagerTrain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassagerTrainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('passager-train.index');
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
        $request->validate([
            'train_id'         => '',
            'passager_id'       => '',
        ]);

        $passagerTrain = PassagerTrain::create($request->only(['passager_id','train_id'])); //adicionar os dados
        $passagerTrain->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PassagerTrain  $passagerTrain
     * @return \Illuminate\Http\Response
     */
    public function show(PassagerTrain $passagerTrain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PassagerTrain  $passagerTrain
     * @return \Illuminate\Http\Response
     */
    public function edit(PassagerTrain $passagerTrain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PassagerTrain  $passagerTrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PassagerTrain $passagerTrain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PassagerTrain  $passagerTrain
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from passager_trains where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/delete-records">Click Here</a> to go back.';
    }
}
