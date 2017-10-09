<?php

namespace App\Http\Controllers;

use App\Roomtarrifs;
use Illuminate\Http\Request;

class RoomtarrifsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtarrifs = Roomtarrifs::all();
        return view('createtarrif',compact('roomtarrifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'name' => 'required',
            'price' => 'required|integer',
            
        ]);

        Roomtarrifs::create($request->all());
        return redirect()->back()->withErrors(['Created :)']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roomtarrifs  $roomtarrifs
     * @return \Illuminate\Http\Response
     */
    public function show(Roomtarrifs $roomtarrifs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roomtarrifs  $roomtarrifs
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomtarrifs $roomtarrifs, $id)
    {
        $roomtarrifs = Roomtarrifs::find($id);
        return view('edittarrif',compact('roomtarrifs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roomtarrifs  $roomtarrifs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomtarrifs $roomtarrifs)
    {
        $roomtarrif = $roomtarrifs->findOrFail($request->id);
        $roomtarrif->update($request->all());

        return redirect('createtarrif')->withErrors(['Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roomtarrifs  $roomtarrifs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomtarrifs $roomtarrifs, $id)
    {
        $roomtarrif = $roomtarrifs->findOrFail($id);    
        $roomtarrif->delete();

        return redirect()->back()->withErrors(['Deleted']);

    }
}
