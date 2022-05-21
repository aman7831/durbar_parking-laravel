<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="style.css">

    <title>Durbar Parking</title>
</head>

<body>
    <div class="my-5 page" size="A4">
        <div class="p-5">
            <section class="top-content bb d-flex justify-content-between">
                <div class="logo">
                    <img src="Tlogo.png" alt="" class="img-fluid">
                </div>
                <div class="top-left">
                    <div class="graphic-path">
                        <p>Seller Invoice Bill</p>
                    </div>
                  
                   
                    <div class="position-relative">
                    
                        <p>Invoice No. <span>{{$reserves->id}}</span></p>
                       
                    </div>
                    
        
                </div>
            </section>

            <section class="store-user mt-5">
                <div class="col-10">

                    <div class="row bb pb-3">
                        <!-- Seller  -->
                        <div class="col-7">
                            <p>Seller Name</p>
                            <a href="/home"><h2>Durbar Parking</h2></a>
                            <p class="address"> DurbarMarg - 15 , <br> Kathmandu 44600, Nepal </p>
                            <div class="txn mt-2">Contact No. 98765431245</div>
                            <div class="txn mt-2">PAN/VAT No. 234567890</div>
                        </div>
                        <!-- Buyer  -->
                        <div class="col-5">
                            <p>Durbar Parking User</p>
                            <h2>{{ Auth::user()->name }}</h2>
                            <div class="txn mt-2">{{ Auth::user()->email}}</div>
                        </div>
                    </div>

                    <div class="row extra-info pt-3">
                        <div class="col-7">
                            <p>Payment Method: <span>Cash On Delivery</span></p>
                        </div>
                        <div class="col-5">
                           <p>Reserved Date: <span>{{$reserves->created_at}}</span></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-area mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Vehicle Name</td>
                            <td>Vehicle Number</td>
                            <td>Parking Lot</td>
                            <td>Date</td>
                            <td>Checkin Time</td>
                            <td>Checkout Time</td>
                            <td>Time parked</td>
                            <!-- <td>Total price</td> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    
                                    <div class="media-body">
                                        <p class="mt-0 title">{{$reserves->vehicle_name}}</p>
                                    </div>
                                </div>
                            </td>

                            <?php 
                            $time_diff = strtotime($reserves->to_time)-strtotime($reserves->from_time);
                            $hrs = date('h',$time_diff);
                            $mins = date('i',$time_diff);
                            $secs = date('s',$time_diff);
                            $time = $time_diff/60/60;
                            if($mins>0){
                                $time++;
                            }
                            $total = $time * 50;
                            ?>

                            <td>{{$reserves->vehicle_number}}</td>
                            <td>{{$reserves->parkinglot}}</td>
                            <td>{{$reserves->date}}</td>
                            <td>{{$reserves->from_time}}</td>
                            <td>{{$reserves->to_time}}</td>
                            <td>{{date('h:i',$time_diff)}}</td>
                           
                            <!-- <td>{{$total}}</td> -->
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="balance-info">
                <div class="row">
                    <div class="col-8">
                        <p class="m-0 font-weight-bold"> Thank you</p>
                        <p>for choosing Durbar Parking, Have a nice day ahed.</p>
                    </div>
                    <div class="col-4">
                        <table class="table border-0 table-hover">
                            <tr>
                                <td>Price</td>
                                <td>Rs 50.</td>
                            </tr>
                            <tr>
                                <td>Time Duration</td>
                                <td>{{date('h:i',$time_diff)}}</td>                            
                            </tr>
                          
                            <tfoot>
                                <tr>
                                    <td>Total:</td>
                                    <td>Rs. {{$total}}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        <!-- Signature -->
                        <div class="col-12">
                            <img src="signature.png" class="img-fluid" alt="">
                            <p class="text-center m-0"> Director Signature </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Cart BG -->
            <img src="cart.jpg" class="img-fluid cart-bg" alt="">

            <footer>
                <hr>
                <p class="m-0 text-center">
                    Please select the payment method to pay. <a href="/payment">Paynow</a>
                </p>
                <div class="social pt-3">
                    <span class="pr-2">
                        <i class="fas fa-mobile-alt"></i>
                        <span>0123456789</span>
                    </span>
                    <span class="pr-2">
                        <i class="fas fa-envelope"></i>
                        <span>me@saburali.com</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-facebook-f"></i>
                        <span>/sabur.7264</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-youtube"></i>
                        <span>/abdussabur</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-github"></i>
                        <span>/example</span>
                    </span>
                </div>
            </footer>
        </div>
    </div>

<style>

    :root {
    --body-bg: rgb(204, 204, 204);
    --white: #ffffff;
    --darkWhite: #ccc;
    --black: #000000;
    --dark: #615c60;
    --themeColor: #b0b435;
    --pageShadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
}

/* Font Include */
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');

body {
    background-color: var(--body-bg);
}

.page {
    background: var(--white);
    display: block;
    margin: 0 auto;
    position: relative;
    box-shadow: var(--pageShadow);
}

.page[size="A4"] {
    width: 21cm;
    height: 29.7cm;
    overflow: hidden;
}

.bb {
    border-bottom: 3px solid var(--darkWhite);
}

/* Top Section */
.top-content {
    padding-bottom: 15px;
}

.logo img {
    height: 60px;
}

.top-left p {
    margin: 0;
}

.top-left .graphic-path {
    height: 40px;
    position: relative;
}

.top-left .graphic-path::before {
    content: "";
    height: 20px;
    background-color: var(--dark);
    position: absolute;
    left: 15px;
    right: 0;
    top: -15px;
    z-index: 2;
}

.top-left .graphic-path::after {
    content: "";
    height: 22px;
    width: 17px;
    background: var(--black);
    position: absolute;
    top: -13px;
    left: 6px;
    transform: rotate(45deg);
}

.top-left .graphic-path p {
    color: var(--white);
    height: 40px;
    left: 0;
    right: -100px;
    text-transform: uppercase;
    background-color: #ff7200;
    font: 26px;
    z-index: 3;
    position: absolute;
    padding-left: 10px;
}

/* User Store Section */
.store-user {
    padding-bottom: 25px;
}

.store-user p {
    margin: 0;
    font-weight: 600;
}

.store-user .address {
    font-weight: 400;
}

.store-user h2 {
    color: #ff7200;
    font-family: 'Rajdhani', sans-serif;
}

.extra-info p span {
    font-weight: 400;
}

/* Product Section */
thead {
    color: var(--white);
    background: #ff7200;
}

.table td,
.table th {
    text-align: center;
    vertical-align: middle;
}

tr th:first-child,
tr td:first-child {
    text-align: left;
}

.media img {
    height: 60px;
    width: 60px;
}

.media p {
    font-weight: 400;
    margin: 0;
}

.media p.title {
    font-weight: 600;
}

/* Balance Info Section */
.balance-info .table td,
.balance-info .table th {
    padding: 0;
    border: 0;
}

.balance-info tr td:first-child {
    font-weight: 600;
}

tfoot {
    border-top: 2px solid var(--darkWhite);
}

tfoot td {
    font-weight: 600;
}

/* Cart BG */
.cart-bg {
    height: 250px;
    bottom: 32px;
    left: -40px;
    opacity: 0.3;
    position: absolute;
}

/* Footer Section */
footer {
    text-align: center;
    position: absolute;
    bottom: 30px;
    left: 75px;
}

footer hr {
    margin-bottom: -22px;
    border-top: 3px solid var(--darkWhite);
}

footer a {
    color: #ff7200;
}

footer p {
    padding: 6px;
    border: 3px solid var(--darkWhite);
    background-color: var(--white);
    display: inline-block;
}




</style>








</body></html>
