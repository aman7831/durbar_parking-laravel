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

            <div id="card">
            <h3 style=" color:white;text-align: center; background-color: #ff7200; border: 10px solid #cd0000 ; padding: 10px; margin:10px;">
            <form>
                <p style=" color:white; text-align: left;"><label>Card Number</label><input type="text" placeholder="Card Number" required></p>
                <p style=" color:white; text-align: left;"><label>Name on Card</label><input type="text" placeholder="Name on Card" required></p>
                <p style=" color:white; text-align: left;"><label>Expiration Date</label><input type="date" placeholder="Expiry Date" required></p>
                <p style=" color:white; text-align: left;"><label>CVV</label><input type="text" placeholder="CVV" required></p><br>

                <a href="#" style=" color:#cd0000 ;"><button style=" color:#cd0000 ; background-color: #fff; border: 10px solid #fff;"  > Pay Now</button></a></h3>
            </form>
            </div>
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
                <h3 style=" color:white;text-align: center; background-color: #ff7200; border: 10px solid #60bb47; padding: 10px; margin:10px;">You will be redirect to your eSewa account to complete your payment:<br><br>
                <p style=" color:white; text-align: left;">1. Login your esewa account using your esewa id and password.</p>
                <p style=" color:white; text-align: left; ">2. Ensure your eSewa account is active and has sufficent balance.</p>
                <p style=" color:white; text-align: left;">3. Enter OTP (one time password) sent to your registerd mobile number.</p>
                <br><br>
                <p style=" color:white; text-align: left;">***Login your eSewa mobile and PASSWORD (not MPIN)***</p> 
                <a href="https://esewa.com.np/#/home" style=" color:#60bb47;"><button style=" color:#60bb47; background-color: #fff; border: 10px solid #fff;"  > Pay Now</button></a></h3>
            </div>
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

             <div id="cash">
             <h3 style=" color:white;text-align: center; background-color: #ff7200; border: 10px solid #b6906b; padding: 10px; margin:10px;">You can Pay cash at the time of checkout.<br><br>
                <a href="#" onclick="paymentsuccess()" style=" color:#b6906b;"><button style=" color:#b6906b; background-color: #fff; border: 10px solid #fff;"  > Pay Now</button></a></h3>
        </div>
    <div>    
   
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


        function paymentsuccess()
        {
            swal({
                title: "Congratulation",
                text: "Your Payment is successful",
                icon: "success",
            }).then(function() {
                window.location = "/home";
            });
        }


           
    
    </script>

@endsection