<?php

namespace App\Http\Controllers;

use App\Merchandise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchandisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('merchandise.index');
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
        //  merchandise
        $request->validate([
            'name'         => '',
            'description'       => '',
            'category_id'   => '',
            'wagon_id'   => '',
            'user_id'   => '',
        ]);

        $merchandise = Merchandise::create($request->only(['user_id','telephone', 'name','wagon_id','description'])); //adicionar os dados
        $merchandise->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function show(Merchandise $merchandise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function edit(Merchandise $merchandise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchandise $merchandise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from merchandises where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/delete-records">Click Here</a> to go back.';
    }
}
