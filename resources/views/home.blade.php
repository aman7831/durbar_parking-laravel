@extends('layouts.app')

@section('content')
<br>
    <center>
        <div class="heading">
            <h2>Parking management system</h2>
        </div>
    </center>
    <br><br>

    <div class="row" style="border-top: 10px solid #ff7200;
        border-left: 10px solid #ff7200;
        border-right: 10px solid #ff7200;
        border-bottom: 27px solid #ff7200;">

    <!-- <hr style="color:red;; width:100%; border:0; border-bottom:3px solid #ff7200;"> -->

    <div class="container">
           
        <a href="#">
        <div class="row"> 
            <div class="card" style="width: 8rem;">   
                <button href="#" class="buy_now btn-success">Start</button>
                
                <div class= "col-md-1"></div>
            </div>
            
        </div>
        </a>

        @if(!empty($parkinglots))
        @foreach($parkinglots as $parkinglot)
        
        <a href="/reserve_now/{{$parkinglot->id}}">
        <div class="row"> 
            <div class="card" style="width: 8rem;">   
                <button href="/reserve_now/{{$parkinglot->id}}" class="buy_now btn-success">{{$parkinglot->parking_lot_name}} </button>
                
                <div class= "col-md-1"></div>
            </div>
            
        </div>
        </a>
        @endforeach
        @endif

        <a href="">
        <div class="row"> 
            <div class="card" style="width: 8rem;">   
                <button href="" class="buy_now btn-success">End</button>
                
                <div class= "col-md-1"></div>
            </div>
            
        </div>
        </a>
    </div>

    <!-- <div class="column">
            <div class="menu">
                <ul>
                    <li>
                        <div class="parkinglot">
                            <form>
                                <a href="#" active>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <center>Start</center>
                                </a>
                            </form>
                        </div>
                    </li>
                    @if(!empty($parkinglots))
                    
                    @foreach($parkinglots as $parkinglot)
                    <li>
                        <div class="parkinglot">
                            <form>
                                <a href="/reserve_now/{{$parkinglot->id}}">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <center>{{$parkinglot->parking_lot_name}}</center>
                                </a>
                            </form>
                        </div>
                    </li>
                    @endforeach
                    @endif

                    <li>
                        <div class="parkinglot">
                            <form>
                                <a href="/home">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <center>End</center>
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
                <br><br>
            </div>          
        </div>
        <hr style="color:red;; width:100%; border:0; border-bottom:3px solid white;">

        <br><br>
        
    </div> -->
</div>
@endsection
