<?php

namespace App\Http\Controllers;

use App\Models\ReserveParking;
use App\Models\Vehicle;
use Illuminate\Http\Request;


class ReserveParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserves = ReserveParking::where('user_id',auth()->user()->id)->get();

        return view('reserve',compact('reserves'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user()?auth()->user()->id:null;
        $r= new ReserveParking();
        $r->vehicle_name = $request->vehicle_name;
        $r->vehicle_number = $request->vehicle_number;
        $r->parkinglot = $request->parkinglot;
        $r->date = $request->date;
        $r->time_from = $request->time_from;
        $r->time_to = $request->time_to;


        $r->user_id = $user;
        $r->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReserveParking  $reserveParking
     * @return \Illuminate\Http\Response
     */
    public function show(ReserveParking $reserveParking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReserveParking  $reserveParking
     * @return \Illuminate\Http\Response
     */
    public function edit(ReserveParking $reserveParking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReserveParking  $reserveParking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReserveParking $reserveParking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReserveParking  $reserveParking
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReserveParking $reserveParking)
    {
        //
    }
}
