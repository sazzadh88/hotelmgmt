<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\Roomtarrifs;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Rooms::all();
        $tarrifs = Roomtarrifs::all();
        return view('room.index',compact('rooms','tarrifs'));
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
            'roomtarrifs_id' => 'required',
            'room_no' => 'required|integer',
            
        ]);

        Rooms::create($request->all());
        return redirect()->back()->withErrors(['Created :)']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(Rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rooms $rooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms $rooms)
    {
        //
    }


}
