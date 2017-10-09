<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Room;

class SiteController extends Controller
{
    public function index(){

    	return view('site.index');
    }

    public function about(){

    	return view('site.about');
    }

    public function roomsearch(Booking $booking, Request $request){
    	// $this->validate($request, [
    	//                   'arrive' => 'required',
    	//                   'departure' => 'required',
    	//                   'adult'=>'required|integer',
    	//                   'children'=>'required|integer'
    	// ]);

    	$arrive =  date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $request->arrive)));
    	$departure =  date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $request->departure)));

        $bookedroomnos = $booking::where('arrive','<=',$arrive)
                             ->where('departure','>=',$arrive)
                             ->get(['roomno']);

        

        $allroomnos = json_decode(Room::get(['roomno']));
        
        $bookedroomnos = json_decode($bookedroomnos);
        
        $availableroomids = array();
        
        
        for($i = 0; $i < count($allroomnos) ; $i++){
            if(!in_array($allroomnos[$i], $bookedroomnos)){
                $room = Room::where('roomno', $allroomnos[$i] )->first();
                array_push($availableroomids, $room->id);
            }
        }
        // return view('site.rooms',compact('availableroomids')); 
        return $availableroomids; 
    }

    

}
