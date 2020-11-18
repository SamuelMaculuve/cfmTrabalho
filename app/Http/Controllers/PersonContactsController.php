<?php

namespace App\Http\Controllers;

use App\PersonContact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'email'       => '',
            'fax'   => '',
            'telephone'         => '',
            'user_id'=>'',
        ]);
        $live = Lives::create($request->only(['telephone', 'name','telephone','fax','user_id'])); //adicionar os dados
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PersonContact  $personContact
     * @return \Illuminate\Http\Response
     */
    public function show(PersonContact $personContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonContact  $personContact
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonContact $personContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonContact  $personContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonContact $personContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonContact  $personContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonContact $personContact)
    {
        //
    }
}
