<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Parking_detailsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function parking_details()
    {
        return view('parking_details');
    }
    
    public function book_now()
    {
        return view('book_now');
    }

    public function use_now()
    {
        return view('use_now');
    }

    public function reserve_now()
    {
        return view('reserve_now');
    }

}
