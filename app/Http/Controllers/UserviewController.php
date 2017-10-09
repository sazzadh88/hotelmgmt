<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buser;

class UserviewController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }

    public function getall(){
      $users = Buser::all();
      return view('allusers',compact('users'));
    }

    public function userdelete(Buser $user, $id){
    	$u = $user->findOrFail($id);    
    	$u->delete();

    	return redirect()->back()->withErrors(['Deleted']);
    }
}
