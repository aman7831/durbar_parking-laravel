<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Parkinglot;
use App\Models\ReserveParking;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
   
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $parkinglots = Parkinglot::get();
        return view('home',compact('parkinglots'));

    }

    public function start(){
        

        $parkinglots = Parkinglot::get();
        $today = date('Y-m-d');
        $time =date('h:i');
        $unavailable = null;
        $parking = ReserveParking::where('date',$today)->get();
        foreach($parking as $a  => $park){
                if($time > $park->to_time && $time > $park->from_time ){ 
                }  
                else if($time < $park->to_time && $time < $park->from_time ){ 
                }
                else{
                    $unavailable[$a] = $park;
                }
        }   
        $unavailable =collect($unavailable)->pluck('parkinglotid');

        
        $available = $parkinglots->whereNotIn('id',$unavailable);

        return view('home',compact('parkinglots','available')); 
       

   //convert time utc to local


    }
}
