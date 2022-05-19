@extends('layouts.app')

@section('content')
<br><br>

        <h1 class="section-heading" style="text-align:center; color: rgba(253,88,88,255); font-size: 60px; text-transform: capitalize; margin-bottom: 20px;">
            Our Services
        </h1>
        
    <center>
    <div class="row">
        <div class="column">
            <div class="card 10px">
                <a href="/vehicle_details">
                <div class="icon-wrapper">
                    <!-- <i class="fas fa-magnifier"></i> -->
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            
                <h3>Vehicle Details</h3>
                <p>
                    Find or register to save vehicle details.
                </p>
            </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
            <a href="/parking_details">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                
                <h3>Parking Details</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
</a>
            </div>
        </div>

        <!-- <div class="column">
            <div class="card">
                <a href="/reserve_now">
                    <div class="icon-wrapper">
                        <i class="fas fa-brush"></i>
                    </div>
                    
                    <h3>Reserve a parking area.</h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                        consequatur necessitatibus eaque.
                    </p>
                </a>
            </div>
        </div> -->

        <!-- <div class="column">
            <div class="card">
            <a href="/use_now">

                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Use Parking area.</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
            </div>
            </a>
        </div> -->

        <!-- <div class="column">
            <div class="card">
            <a href="/invoice">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Check invoice bill</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
            </div>
</a>
        </div> -->

        <div class="column">
            <div class="card">
            <a href="/payment">
                <div class="icon-wrapper">
                    <i class="fas fa-brush"></i>
                </div>
                
                <h3>Payment method</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
            </div>
</a>
        </div>
        
    </div>
    </center>
    <br><br>
    <hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
    <center><p style="color:#ff7200;"> <a href="/home" style="color: rgba(253,88,88,255);">Durbar Parking</a> &copy; Copyright 2022, All Rights Reserve <a href="https://aman7831.github.io/aman._.bhandari/" style="color:#ff7200;"> Aman Bhandari</a></p></center>

@endsection