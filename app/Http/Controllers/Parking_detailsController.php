<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkinglot;
use App\Models\ReserveParking;


use App\Models\Vehicle;

class Parking_detailsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function parking_details()
    {
        $reserves = ReserveParking::where('user_id',auth()->user()->id)->get();
        return view('parking_details',compact('reserves'));
    }
    
    public function book_now()
    {
        return view('book_now');
    }

    public function use_now()
    {
        return view('use_now');
    }

    public function reserve_now($id)
    {
        $parkinglot = Parkinglot::where('id',$id)->first();
        $vehicle = Vehicle::where('user_id',auth()->user()->id)->get()  ;
        return view('reserve_now',compact('vehicle','parkinglot'));
    }

    public function invoice($id)
    {
        $reserves = ReserveParking::where('id',$id)->first();
        return view('invoice',compact('reserves')); 
    }
    public function payment()
    {
        return view('payment');
    }

}
