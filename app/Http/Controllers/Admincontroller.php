<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkinglot;
use App\Models\Vehicle;

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

    public function parkinglotdetailsedit($id)
    {
        $parkinglots = Parkinglot::where('id',$id)->first();
        return view('admin.parking_lot_details_edit',compact('parkinglots'));
    }

    public function vehicleedit($id)
    {
        $vehicle = Vehicle::where('id',$id)->first();
        return view('vehicle_edit',compact('vehicle'));
    }
    
    public function search(Request $request)
    {
        $vehicle = Vehicle::where('vehicle_number',$request->vehicle_number)->get();
        return view('admin.registered_vehicle', compact('vehicle')); 
    }


}
