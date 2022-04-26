<?php

namespace App\Http\Controllers;

use App\Models\Parkinglot;
use Illuminate\Http\Request;

class ParkinglotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parkinglots = Parkinglot::get();
        dd($parkinglots);
        return view('admin.parking-lot-details',compact('parkinglots'));
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
        $a= new Parkinglot();
        $a->parking_lot_name = $request->parkinglotname;
        $a->price = $request->price;
        $a->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parkinglot  $parkinglot
     * @return \Illuminate\Http\Response
     */
    public function show(Parkinglot $parkinglot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parkinglot  $parkinglot
     * @return \Illuminate\Http\Response
     */
    public function edit(Parkinglot $parkinglot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parkinglot  $parkinglot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parkinglot $parkinglot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parkinglot  $parkinglot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parkinglot $parkinglot)
    {
        //
    }
}
