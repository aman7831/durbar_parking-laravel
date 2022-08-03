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

    

       
      
                    
                        @if(!empty($available))
                         The available parking lot for now are:
                        @foreach($available as $av),
                        {{$av->parking_lot_name}}
                        @endforeach                           
                         @endif
        
    
        

    <div class="container">
        <a href="/start">
        <div class="row"> 
            <div class="card" style="width: 8rem;">   
                <button href="/start" class="buy_now btn-success" id="button">Start</button>
                
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
</div>
@endsection
