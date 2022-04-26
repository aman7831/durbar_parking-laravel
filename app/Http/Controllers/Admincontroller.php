<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkinglot;

class admincontroller extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.dashboard');    
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
    }

    public function registeredvehicle()
    {
        return view('admin.registered_vehicle'); 
   
    }

    public function parkinglotdetails()
    {
        $parkinglots = Parkinglot::get()->all();
        return view('admin.parking-lot-details',compact('parkinglots'));
    }
}
