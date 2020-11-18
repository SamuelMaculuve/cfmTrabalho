<?php

namespace App\Http\Controllers;

use App\Passager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passagers = Passager::all();

        return view('passagers.index',compact('passagers'));
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
            'name'         => '',
            'surname'       => '',
            'occupation'   => '',
            'user_id'         => '',
        ]);

        $recipient = Passager::create($request->only(['surname', 'name','user_id','occupation'])); //adicionar os dados

        $recipient->save();

        return redirect()->to('/passagers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Passager  $passager
     * @return \Illuminate\Http\Response
     */
    public function show(Passager $passager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Passager  $passager
     * @return \Illuminate\Http\Response
     */
    public function edit(Passager $passager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Passager  $passager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passager $passager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Passager  $passager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passager $passager)
    {
        //
    }
}
