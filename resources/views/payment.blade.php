@extends('layouts.app')

@section('content')
    <h2 style="height: 100px; padding: 70px">SELECT PAYMENT METHOD</h2>

    <div class="row">
        <div class="column">
            <button href="" onclick="card()">
            <div class="card 10px">
                    <div class="icon-wrapper">
                    <img src="/img/card.png" class="img-responsive" alt="" style="height: 50px; width:50px;">
                    </div>
                
                    <h3>Credit/Debit Card</h3>
                </div>
            </button>
        </div>

        <div class="column">
            <button href="" onclick="esewa()">
            <div class="card 10px">
                    <div class="icon-wrapper">
                    <img src="/img/esewa.png" class="img-responsive" alt="" style="height: 50px; width:50px;">
                    </div>
                
                    <h3>ESEWA</h3>
                </div>
            </button>
            
            <div id="esewa">
                <input type="text" value="Ram">
                <input type="text" value="shyam"></div>
            </div>
        <div class="column">
            <button href="" onclick="cash()">
            <div class="card 10px">
                    <div class="icon-wrapper">
                    <img src="/img/cash.png" class="img-responsive" alt="" style="height: 50px; width:50px;">
                    </div>
                
                    <h3>Cash on delivery</h3>
                </div>
            </button>
        </div>
    <div>

    <div id="esewa">
    <input type="text" value="Ram">
    <input type="text" value="shyam"></div>

    <div id="card">
    <input type="text" value="Ram">
    <input type="text" value="shyam"></div>

    <div id="cash">
    <input type="text" value="Ram">
    <input type="text" value="shyam"></div>

    
   
<style>    
    #card
    {
      display:none;
    }
    #esewa
    {
      display:none;
    }
    #cash
    {
      display:none;
    }
</style>

    <script>
        function card() {
        var card = document.getElementById("card");
        card.style.display = "block";  	 
        }
        function esewa() {
        var esewa = document.getElementById("esewa");
        esewa.style.display = "block";  	 
        }
        function cash() {
        var cash = document.getElementById("cash");
        cash.style.display = "block";  	 
        }
    </script>

@endsection