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
        $parking = ReserveParking::join('parkinglots','reserve_parkings.parkinglotid','=','parkinglots.id')->where('date','=',$today)->get();
       foreach($parking as $park){
        if($time < $park->to_time){
$available = $park;
break;
        }
       }   
       return view('home',compact('parkinglots','available')); 

    //    reserve parking ->parkinglot_id
        //parking -> reserve parking join
        //reserve foreach  current time _ reserve time  compare 
    //khali xa ki nai
/*

        $parkinglots = Parkinglot::get();
foreach($parkinglots as $parking){
date
if( $parking->reserve()->date() = date())

check succes ->return
   
}

    }
   return  full


*/


    }
}
