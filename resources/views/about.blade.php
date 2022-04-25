@extends('layouts.app')

@section('content')
<br>
    <section class="about">
        <div class="main">
            <img src="{{ asset('img/background.jpg') }}">
            <div class="about-text">
                <h1>About us</h1>
                <h5>Developer & Designer <span><a href="" style="color: rgba(253,88,88,255);">Aman Bhandari</a></span></h5>
                <p>
                Parking of vehicle is one of the basic necessities required in a city. Durbar Parking is used for managing the records of the incoming and outgoing vehicles in a
                durbar marg, Kathmandu. It is easy for Admin to retrieve the data if the vehicle has been visited
                through number he can get that data. Nowadays many people visiting durbar marg are facing
                problem of vehicle parking.
                <br><br>
                The objective of this project is to build a Parking management system that enables the time
                management and control of vehicles using number plate recognition. It is a system that will
                track the entry and exit of cars, maintain a listing of cars within the parking lot, and determine
                if the parking lot is full or not. It will determine the cost of per vehicle according to their time
                consumption.

                </p>
                <a href="/home"><button>Know more</button></a>
            </div>
        </div>
    </section>
    <hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
    <center><p style="color:#ff7200;"> <a href="/home" style="color: rgba(253,88,88,255);">Durbar Parking</a> &copy; Copyright 2022, All Rights Reserve <a href="https://aman7831.github.io/aman._.bhandari/" style="color:#ff7200;"> Aman Bhandari</a></p></center>
@endsection