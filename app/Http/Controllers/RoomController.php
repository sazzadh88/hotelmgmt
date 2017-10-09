<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Tarrif;

class RoomController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $rooms = Room::all();
        $tarrifs = Tarrif::all();
        return view('room.index',compact('rooms','tarrifs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tarrif_id' => 'required',
            'roomno' => 'required|integer|unique:rooms',
            
        ]);

        Room::create($request->all());
        return redirect()->back()->withErrors(['Created :)']);
    }


    public function edit(Room $rooms, $id){
    	$room = $rooms::findOrFail($id);
    	$tarrifs = Tarrif::all(); 
    	// return $room;
        return view('room.edit',compact('room','tarrifs'));
    }

    public function update(Room $rooms, Request $request){
    	$room = $rooms->findOrFail($request->id);
    	$room->update($request->all());
    	return redirect('createroom')->withErrors(['Updated']);
    }

    public function destroy(Room $rooms, $id)
    {
        $room = $rooms->findOrFail($id);    
        $room->delete();

        return redirect()->back()->withErrors(['Deleted']);

    }
}
