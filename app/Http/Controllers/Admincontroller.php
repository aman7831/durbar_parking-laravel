<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkinglot;
use App\Models\Vehicle;
use App\Models\ReserveParking;


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
        $vehicle = Vehicle::join('users','vehicles.user_id','=','users.id')->get();
        
        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.registered_vehicle',compact('vehicle'));     
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
   
    }

    public function allreservedparkinglotdetails()
    {
        // $reserves = ReserveParking::get()->all();
        $reserves = ReserveParking::join('users','reserve_parkings.user_id','=','users.id')->get();

        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.check_reserve_parking',compact('reserves'));     
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }   
    }

    public function parkinglotdetails()
    {
        $parkinglots = Parkinglot::get()->all();
        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.parking-lot-details',compact('parkinglots'));     
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
    }

    public function parkinglotdetailsedit($id)
    {
        $parkinglots = Parkinglot::where('id',$id)->first();
        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.parking_lot_details_edit',compact('parkinglots'));   
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
    }


    public function vehicleedit($id)
    {
        $vehicle = Vehicle::where('id',$id)->first();
        return view('vehicle_edit',compact('vehicle'));
    }
    







    //linear search
    public function search(Request $request)
    {
        $vehicle = Vehicle::join('users','vehicles.user_id','=','users.id')->where('vehicle_number',$request->vehicle_number)->get();
        
        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.registered_vehicle', compact('vehicle'));    
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }

    }

    public function search_reserved_vehicle(Request $request)
    {
        $reserves = ReserveParking::join('users','reserve_parkings.user_id','=','users.id')->where('vehicle_number',$request->vehicle_number)->get();
        
        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.check_reserve_parking', compact('reserves')); 
   
            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }
    }

    public function search_parking_lot_name(Request $request)
    {
        $parkinglots = Parkinglot::where('parking_lot_name',$request->parking_lot_name)->get()->all();
        
        if(auth()->user()){
            if(auth()->user()->role_id==1){
                return view('admin.parking-lot-details', compact('parkinglots')); 

            }
            else{
                return redirect('/home');
            }
        } 
        else{
            return redirect('/home');
        }

    }



    public function search_parking_details(Request $request)
    {
        $reserves = ReserveParking::where('user_id',auth()->user()->id)->where('vehicle_number',$request->vehicle_number)->get();
        return view('parking_details',compact('reserves'));
    }
    
    
}
