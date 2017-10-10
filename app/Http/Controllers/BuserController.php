<?php

namespace App\Http\Controllers;

use App\Buser;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use URL;
use Redirect;
class BuserController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';


    public function __construct()
    {   
     
     $this->redirectTo = URL::previous();   
        
        

    }

    public function index(){
    	$user = auth()->guard('buser')->user();
        return $user->mobile;
                
    }


    public function login(){
    	   
           return view('user.login');

      
    }

    public function verifylogin(Request $request){
    	
       $this->validate($request, [
                   'email' => 'required|email',
                   'password' => 'required',
               ]);
     if(auth()->guard('buser')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
     {
      
      return view('site.index');
             
     }else{
         dd('your username and password are wrong.');
     }

    }

    public function logout(Request $request)
        {
            Auth::guard('buser')->logout();
            return redirect()->guest(route( 'site.index' ));
        }

    
}


