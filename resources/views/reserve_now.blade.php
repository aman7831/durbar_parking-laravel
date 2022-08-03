  @extends('layouts.app')

@section('content')
  <div class="container">
    <div>
	    <h3>Please select your registered vehicle from here</h3>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><center>Vehicle ID</center></th>
                        <th><center>Vehicle Name</center></th>
                        <th><center>Vehicle Number</center></th>
                        <th><center>Select</center></th>
                    </tr>
                </thead>
            </table>
        </div>
  
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                  @foreach($vehicle as $key => $v)
                    <tr>
                        <td><center><div id ="id[{{$key}}]" >{{ $v->id }}</div></center></td>
                        <td><center><div id ="name[{{$key}}]" >{{ $v->vehicle_name}}</div></center></td>
                        <td><center><div id ="number[{{$key}}]" >{{ $v->vehicle_number}}</div></center></td>
                        <td><center><button onclick="select({{$key}})">Select</button></center></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
	    </div>


      <div>
        <div class="login-box">
          <h2>Reserve a Parking Space</h2>
          
          <form action="/reserve" method="post">
            @csrf
              
              <div class="user-box">
                <input type="text" name="vehicle_name" id ="vehicle_name" required="">
                <label>Vehicle Name : </label>
              </div>

              <div class="user-box">
                <input type="Text" name="vehicle_number" id = "vehicle_number" required="">
                <label>Vehicle Number : </label>
              </div>
         
              <div class="user-box">
                <!-- <button id="sub" style="width: 10px; height: 10px; cursor: pointer;">-</button> -->
                <?php
                if(!empty($parkinglot)){
                $name = $parkinglot->parking_lot_name;
                }
                else{
                  $name = null;
                }
                ?>
                <input type="text" name="parkinglot" id="qtyBox" value="{{$name}}" placeholder="{{$name}}" required="">
                <!-- <button id="add" style="width: 10px; height: 10px; cursor: pointer;">+</button> -->
                <label>Parking lot (P) : </label>
              </div>


              <div class="user-box">
                <!-- <button id="sub" style="width: 10px; height: 10px; cursor: pointer;">-</button> -->

     




                <?php
                if(!empty($parkinglot)){
                $id = $parkinglot->id;
                }
                else{
                  $id = null;
                }
                ?>
                <input type="text" name="parkinglotid" id="qtyBox" value="{{$id}}" placeholder="{{$id}}" required="">
                <!-- <button id="add" style="width: 10px; height: 10px; cursor: pointer;">+</button> -->
                <label>Parking lot ID : </label>
              </div>

              <div class="user-box">
                <input  id="date_picker" type="date" name="date" required="">
                <label>Date : </label>
              </div>

              <div class="user-box">
                <input type="time" name="from_time" required="">
                <label>From (Time) : </label>
              </div>

              <div class="user-box">
                <input type="time" name="to_time" required="">
                <label>To (Time) : </label>
              </div>
              @if(!empty($message))
                  {{$message}}
                  @dd($message)
                  @endif
                 
                 
                 
                 
                 
                  @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
              
              <a href="/parking_details">
                <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <center>Let's Reserve the parking space</center>
              </button>
              </a>
              
            </form>
	    </div>
    </div>
  </div>


  
</div>
</div>
<script language="javascript">

// select vehicle
function select(key){
 var name = document.getElementById('name['+key+']').innerHTML;
 var number = document.getElementById('number['+key+']').innerHTML;
 document.getElementById('vehicle_name').value = name;
 document.getElementById('vehicle_number').value = number;
}


  //date
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0');
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;
  $('#date_picker').attr('min',today);

</script>

<hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
<center><p style="color:#ff7200;"> <a href="/home" style="color: rgba(253,88,88,255);">Durbar Parking</a> &copy; Copyright 2022, All Rights Reserve <a href="https://aman7831.github.io/aman._.bhandari/" style="color:#ff7200;"> Aman Bhandari</a></p></center>
@endsection