<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Parkinglot;

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
