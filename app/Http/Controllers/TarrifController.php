<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarrif;

class TarrifController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tarrifs = Tarrif::all();
        return view('createtarrif',compact('tarrifs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            
        ]);

        Tarrif::create($request->all());
        return redirect()->back()->withErrors(['Created :)']);
    }

    public function edit(Tarrif $roomtarrifs, $id)
    {
        $roomtarrifs = Tarrif::find($id);
        return view('edittarrif',compact('roomtarrifs'));
    }

    public function update(Request $request, Tarrif $roomtarrifs)
    {
        $roomtarrif = $roomtarrifs->findOrFail($request->id);
        $roomtarrif->update($request->all());

        return redirect('createtarrif')->withErrors(['Updated']);
    }

    public function destroy(Tarrif $roomtarrifs, $id)
    {
        $roomtarrif = $roomtarrifs->findOrFail($id);    
        $roomtarrif->delete();

        return redirect()->back()->withErrors(['Deleted']);

    }
}
