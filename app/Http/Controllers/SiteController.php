<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Room;
use App\Tarrif;
use Session;
use DateTime;

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
    	//                   'adults'=>'required|integer',
    	//                   'children'=>'required|integer'
    	// ]);
       
    	$arrive =  date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $request->arrive)));
    	$departure =  date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $request->departure)));

        //Initialize Sessions

        $date1 = new DateTime($arrive);
        $date2 = new DateTime($departure);

        $interval = $date1->diff($date2);

        Session::put('arrive', date('F d, Y', strtotime($request->arrive)));
        Session::put('departure', date('F d, Y', strtotime($request->departure)));
        Session::put('adults', $request->adults);
        Session::put('children', $request->children);
        Session::put('duration', $interval->days);


        $bookedroomnos = $booking::where('arrive','<=',$arrive)
                             ->where('departure','>=',$arrive)
                             ->get(['roomno']);

        

        $allroomnos = json_decode(Room::get(['roomno']));
        
        $bookedroomnos = json_decode($bookedroomnos);
        
        $availableroomids = array();
        $availableroomnos = array();
        
        
        for($i = 0; $i < count($allroomnos) ; $i++){
            if(!in_array($allroomnos[$i], $bookedroomnos)){
                // $room = Room::where('roomno', $allroomnos[$i] )->first();
                array_push($availableroomnos, $allroomnos[$i]);
            }
        }

        $availableroomnos  = json_decode(json_encode($availableroomnos),true);

        
        for($j = 0; $j < count($availableroomnos) ; $j++){
            $room = Room::where('roomno',$availableroomnos[$j])->first();
            array_push($availableroomids, $room->id);
        } 
        return view('site.rooms',compact('availableroomids')); 
    }

    public function roombook($id){
        
        // $roomdetails = Room::findOrFail($id)->tarrif()->get();
        $roomid = $id;
        return view('room.roombook', compact('roomid'));
    }

}
